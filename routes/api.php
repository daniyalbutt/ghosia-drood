<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{AuthController, UserController, BookController, LectureController, DuroodController, AyahController};

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::post('send-password-link',[AuthController::class,'sendForgetPassword']);
Route::post('verify-forgot-password-mail',[AuthController::class, 'verifyForgotPasswordOTP']);
Route::post('change-forgot-password',[AuthController::class, 'changeForgetPassword']);
Route::get('get-books',[BookController::class,'books']);
Route::get('get-lectures',[LectureController::class,'lectures']);
Route::get('total-durood',[DuroodController::class,'totalDurood']);
Route::get('remote-users',[UserController::class,'remoteUsers']);
Route::get('ayah-of-the-day', [AyahController::class, 'AyahDetails']);
Route::get('hadith-of-the-day', [AyahController::class, 'HadithDetails']);
Route::middleware('auth:api')->group(function(){
    Route::get('profile',[UserController::class, 'profile']);
    Route::post('update-profile',[UserController::class,'updateProfile']);  
    Route::post('change-password',[AuthController::class, 'changePassword']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('add-durood',[DuroodController::class,'addDurood']);
    Route::get('my-durood',[DuroodController::class,'myDurood']);
    Route::get('durood-history',[DuroodController::class,'duroodHistory']);   
});
