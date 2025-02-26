<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
