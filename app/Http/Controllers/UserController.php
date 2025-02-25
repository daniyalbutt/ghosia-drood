<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Hash;
class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $data = User::latest()->where('status', 0)->where('is_admin', 0)->get();
        return view('users.index',compact('data'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phone' => 'required',
            'education' => 'required',
            'profession' => 'required',
            'country' => 'required',
            'district' => 'required',
            'dob' => 'required',
            'address' => 'required',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->phone = $request->phone;
        $data->save();

        $profile = new Profile();
        $profile->education = $request->education;
        $profile->profession = $request->profession;
        $profile->country = $request->country;
        $profile->district = $request->district;
        $profile->dob = $request->dob;
        $profile->address = $request->address;
        $profile->user_id = $data->id;
        $profile->save();

        return redirect()->back()->with('success', 'User created successfully.');
    }

    public function edit($id){
        $data = User::find($id);
        return view('users.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'required',
            'education' => 'required',
            'profession' => 'required',
            'country' => 'required',
            'district' => 'required',
            'dob' => 'required',
            'address' => 'required',
        ]);
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        if(!empty($request->password)){ 
            $data->password = Hash::make($request->password);
        }
        $data->phone = $request->phone;
        $data->save();

        $profile = Profile::where('user_id', $id)->first();
        $profile->education = $request->education;
        $profile->profession = $request->profession;
        $profile->country = $request->country;
        $profile->district = $request->district;
        $profile->dob = $request->dob;
        $profile->address = $request->address;
        $profile->user_id = $data->id;
        $profile->save();
        return redirect()->back()->with('success', 'User Updated successfully.');
    }

    public function destroy($id){
        $data = User::find($id);
        $data->status = 1;
        $data->save();
        return redirect()->back()->with('success', 'User Deleted successfully.');
    }

    public function show($id){
        $data = User::find($id);
        return view('users.show', compact('data'));
    }
 
}
