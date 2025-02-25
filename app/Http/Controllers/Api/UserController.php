<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Resources\UserResource;
use App\Models\User;
class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'sometimes|string',
                'education' => 'sometimes|string',
                'profession' => 'sometimes|string',
                'country' => 'sometimes|string',
                'district' => 'sometimes|string',
                'phone' => 'sometimes|string',
                'dob' => 'sometimes|date',
                'address' => 'sometimes|string',
            ]);

            $user = Auth::user();

            if ($request->has('name')) {
                $user->update(['name' => $request->input('name')]);
            }

            $profileData = $request->only(['education', 'country', 'district', 'dob', 'phone', 'profession', 'address']);
            $user->profile()->updateOrCreate([], $profileData);

            return $this->sendResponse(new UserResource($user), 'Profile updated successfully');
        } catch (ValidationException $e) {
            return $this->sendError('Validation Error', $e->errors());
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function profile()
    {
        try{
            return $this->sendResponse(new UserResource(Auth::user()), 'Profile fetched successfully');
        } catch (ValidationException $e) {
            return $this->sendError('Validation Error', $e->errors());
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function remoteUsers()
    {
        try{
            $user = User::count();
            return $this->sendResponse(['remote_users' => $user, 'ghousa_nasheens' => 0, 'halaqat_e_durood' => 0 ], 'Remote Users Fetched Successfully');
        }
        catch(\Exception $e)
        {
            return $this->sendError($e->getMessage());
        }
    }

}