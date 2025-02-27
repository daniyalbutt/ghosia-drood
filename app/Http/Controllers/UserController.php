<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Durood;
use App\Models\Profile;
use Hash;
class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $data = User::latest()->where('is_admin', 0)->get();
        return view('users.index',compact('data'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'id_number' => 'required',
            'member_type' => 'required',
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'dob' => 'required',
            'address' => 'required',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->id_number = $request->id_number;
        $data->email = str_replace(' ', '-', strtolower($request->name)) . hexdec(uniqid()).'@domain.com';
        $data->password = Hash::make($request->password);
        $data->phone = $request->phone;
        $data->status = 0;
        $data->save();

        $profile = new Profile();
        $profile->member_type = $request->member_type;
        $profile->father_name = $request->father_name;
        $profile->city = $request->city;
        $profile->country = $request->country;
        $profile->whatsapp = $request->whatsapp;
        $profile->dob = $request->dob;
        $profile->address = $request->address;
        $profile->mureed = $request->mureed;
        $profile->silsila = $request->silsila;
        $profile->peer_sb_name = $request->peer_sb_name;
        $profile->astana_location = $request->astana_location;
        $profile->id_card = $request->id_card;
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
            'id_number' => 'required',
            'member_type' => 'required',
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'required',
            'country' => 'required',
            'dob' => 'required',
            'address' => 'required',
        ]);
        $data = User::find($id);
        $data->name = $request->name;
        $data->id_number = $request->id_number;
        // $data->email = $request->email;
        if(!empty($request->password)){ 
            $data->password = Hash::make($request->password);
        }
        $data->status = $request->status;
        $data->phone = $request->phone;
        $data->save();

        $profile = Profile::where('user_id', $id)->first();
        $profile->member_type = $request->member_type;
        $profile->father_name = $request->father_name;
        $profile->city = $request->city;
        $profile->country = $request->country;
        $profile->whatsapp = $request->whatsapp;
        $profile->dob = $request->dob;
        $profile->address = $request->address;
        $profile->mureed = $request->mureed;
        $profile->silsila = $request->silsila;
        $profile->peer_sb_name = $request->peer_sb_name;
        $profile->astana_location = $request->astana_location;
        $profile->id_card = $request->id_card;
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

    public function show($id, Request $request){

        $durood = Durood::whereHas('user', function($q) use ($id){
            $q->where('user_id', $id);
        });

        if($request->start_date != null){
            $start_date = $request->start_date;
            $durood = $durood->where('created_at', '>=', $start_date);
        }

        if($request->end_date != null){
            $end_date = $request->end_date;
            $durood = $durood->where('created_at', '<=', $end_date);
        }
        
        $durood = $durood->get();
        $data = User::find($id);
        return view('users.show', compact('data', 'durood'));
    }
 
}
