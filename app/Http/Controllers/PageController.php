<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Durood;
use Hash;
use DB;

class PageController extends Controller
{
    public function termsConditions(){
        return view('terms');
    }
    public function privacyPolicy(){
        return view('privacy');
    }

    public function aboutUs(){
        return view('about');
    }
    
    public function deleteAccount(){
        return view('delete-account');
    }
    
    public function deleteAccountPost(Request $request){
        $name = $request->name;
        $password = $request->password;
        $user = User::where('name', $name)->first();
        if (!Hash::check($password, $user->password)) {
            return null;
        }
        Profile::where('user_id', $user->id)->delete();
        $user->delete();
        return redirect()->back()->with('success', 'User Deleted successfully.');
    }
    
    public function assetlinks(){
         $jayParsedAry = [
           [
                 "relation" => [
                    "delegate_permission/common.handle_all_urls" 
                 ], 
                 "target" => [
                       "namespace" => "android_app", 
                       "package_name" => "com.zegocloudlivestreamingapp", 
                       "sha256_cert_fingerprints" => [
                          "DA:24:08:8C:C0:07:E9:E5:A5:E1:62:62:F0:46:F2:D5:78:25:52:6D:16:84:4E:B3:E9:B6:66:98:F0:47:A9:A1", 
                          "FA:C6:17:45:DC:09:03:78:6F:B9:ED:E6:2A:96:2B:39:9F:73:48:F0:BB:6F:89:9B:83:32:66:75:91:03:3B:9C"
                       ] 
                    ] 
              ] 
        ];
        return response()->json($jayParsedAry);
    }
}
