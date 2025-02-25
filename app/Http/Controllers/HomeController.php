<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Durood;
use Hash;
use DB;

class HomeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $total_durood = DB::table('duroodpaks')->sum('durood');
        $total_user = DB::table('users')->where('status', 0)->where('is_admin', 0)->count();
        $total_book = DB::table('books')->where('status', 0)->count();
        $data = Durood::orderBy('updated_at', 'desc')->limit(10)->get();
        return view('home', compact('total_durood', 'total_user', 'total_book', 'data'));
    }
}
