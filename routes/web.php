<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
});

Route::post('git/pull/webhook', function(){
    info(shell_exec('git pull 2>&1'));
});


Route::get('/terms-and-conditions',[HomeController::class,'termsConditions']);
Route::get('/about-us',[HomeController::class,'aboutUs']);
Route::get('/privacy-policy',[HomeController::class,'privacyPolicy']);
Route::get('/delete-my-account',[HomeController::class,'deleteMyAccount']);
Route::post('/verify-details', [HomeController::class, 'verifydetails'])->name('password-verify');
Route::post('/delete-account', [HomeController::class, 'deleteaccount'])->name('deleteaccount');
Route::get('/account-deleted',[HomeController::class,'accountDeleted'])->name('account.deleted');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
