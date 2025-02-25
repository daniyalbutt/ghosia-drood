<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class HomeController extends Controller
{
    public function termsConditions()
    {
        return view('terms');
    }

    public function privacyPolicy()
    {
        return view('privacy');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function deleteMyAccount()
    {
        return view('delete_account');
    }

    public function verifydetails(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    return response()->json(['status' => true, 'msg' => 'User Authenticated']);
                } else {
                    return response()->json(['status' => false, 'msg' => 'Password is invalid', 'input' => ['password']]);
                }
                
        } else {
            return response()->json(['status' => false, 'msg' => 'User does not exist', 'input' => ['email', 'password']]);
        }
    }
    public function deleteaccount(Request $request)
    {
        $request->validate([
            'deletetext' => 'required|string',
            'email' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($request->deletetext == 'delete') {
                    $user->delete();
                    return redirect()->route('account.deleted')->with('message', 'User deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'Please type \'delete\' for deleting account.');
            }
        } else {
            return redirect()->back()->with('error', 'User does not exist.');
        }
    }

    public function accountDeleted()
    {
        return view('accountdelete');
    }
}
