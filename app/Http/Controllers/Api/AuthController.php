<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\{User, ForgetPassword};
use App\Mail\ForgetPasswordMail;
use App\Http\Resources\{LoginResource};
use Illuminate\Validation\ValidationException; 

use Hash, Auth;
use Mail;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation'  => 'required'
            ]);

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password'))
            ]);
            // $user->assignRole($request->input('role'));

            Auth::login($user);

            return $this->sendResponse(new LoginResource(Auth::user()), 'User logged in successfully!');
        } catch (ValidationException $e) {
            return $this->sendError('Validation Error',  $e->errors());
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
            'emailorphone' => 'required',
            'password' => 'required'    
        ]);

        $identifier = $request->input('emailorphone');
        $user = User::where('email', $identifier)
        ->orWhere('phone', $identifier)
        ->orWhere('name', $identifier)
        ->first();

        if ($user) {
            if (\Auth::attempt(['email' => $identifier, 'password' => $request->input('password')]) ||
            \Auth::attempt(['phone' => $identifier, 'password' => $request->input('password')]) || 
            \Auth::attempt(['name' => $identifier, 'password' => $request->input('password')])) {

            Auth::login($user);

            return $this->sendResponse(new LoginResource(Auth::user()), 'User logged in successfully!');
            } 
        else {
            return $this->sendError('Invalid Name or ID Card Number.');
        }
        } else {
            return $this->sendError('The user with this name does not exist.');
        }
        } 
        catch (ValidationException $e) {
            return $this->sendError('Validation Error', $e->errors());
        } 
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->user()->token()->revoke();
            return $this->sendResponse([],'Logged Out Successfully!');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    public function verifyForgotPasswordOTP(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|exists:users,email',
                'otp' => 'required|numeric|digits:4'
            ]);
            $user = User::where('email', $request->email)->first();

            $otpUser = ForgetPassword::where('user_id', $user->id)->where('status', 0)->first();

            if ($otpUser) {
                if ($otpUser->otp == $request->otp) {
                    $otpUser->update(['status' => 1]);
                } else {
                    return $this->sendError('OTP is not valid');
                }
            } else {
                return $this->sendError('This user does not requested for changing password or has already used request for one time');
            }
            return $this->sendResponse($user, 'OTP is successfully verified');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    public function sendForgetPassword(Request $request)
    {

        try {
            $request->validate([
                'email' => 'required|exists:users,email'
            ]);
            $user = User::where('email', $request->input('email'))->first();
            $otp = rand('1000', '9999');
            ForgetPassword::updateOrInsert(
                ['user_id' => $user->id],
                ['otp' => $otp, 'status' => 0, 'created_at' => now(), 'updated_at' => now()]
            );
            Mail::to($user->email)->send(new ForgetPasswordMail($user, $otp));

            return $this->sendResponse(['id' => $user->id], 'Please Verify the code.');
        } catch (ValidationException $e) {
            return $this->sendError('Validation Error',  $e->errors());
        }  catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    public function changeForgetPassword(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
            ]);

            $user = User::where('email', $request->input('email'))->first();
            if ($user) {

                $otpUser = ForgetPassword::where('user_id', $user->id)->where('status', 1)->where('updated_at', '>=', now()->copy()->subMinutes(60))->first();

                if ($otpUser) {
                    $otpUser->delete();
                    $user->update(['password' => Hash::make($request->input('password'))]);
                } else {
                    return $this->sendError('This user is not requested for forget password or otp is expired! Please request again for forget password.');
                }
                return $this->sendResponse($user, 'Password Change Succeesfully');
            } else {
                return $this->sendError('User does not exists.');
            }
        } catch (ValidationException $e) {
            return $this->sendError('Validation Error',  $e->errors());

        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    public function changePassword(Request $request)
    {
        $auth = Auth::user();
        if (!$auth) {
        return $this->sendError('User Not Logged in!');
        }
        try{
            $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:6'
            ]);
            if (!Hash::check($request->get('current_password'), $auth->password)) 
            {
                return $this->sendError('Current Password is invalid');
            }
            if (strcmp($request->get('current_password'), $request->new_password) == 0) 
            {
            return $this->sendError('New Password cannot be same as your current password');
            }
            $user =  User::find($auth->id);
            $user->password =  Hash::make($request->new_password);
            $user->save();
            return $this->sendResponse('success','Password Changed Successfully');
        }
        catch (ValidationException $e) {
            return $this->sendError('Validation Error',  $e->errors());

        }
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}