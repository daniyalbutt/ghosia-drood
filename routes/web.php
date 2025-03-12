<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
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

Route::post('git/pull/webhook', function(){
    info(shell_exec('git pull 2>&1'));
});

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes(['register' => false]);

Route::get('/.well-known/assetlinks.json', [PageController::class,'assetlinks']);
Route::get('/terms-and-conditions',[PageController::class,'termsConditions']);
Route::get('/about-us',[PageController::class,'aboutUs']);
Route::get('/privacy-policy',[PageController::class,'privacyPolicy']);
Route::get('/delete-account', [PageController::class,'deleteAccount']);
Route::post('/delete/account', [PageController::class,'deleteAccountPost'])->name('account.delete');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('books', BookController::class);
    Route::resource('users', UserController::class);
    Route::get('user/{id}/attendance/{name}', [UserController::class, 'attendance'])->name('attendance.index');
    Route::post('user/attendance', [UserController::class, 'attendancePost'])->name('attendance.post');
    Route::post('user/trash/{id}', [UserController::class, 'trashUser'])->name('user.trash');
    Route::post('durood/trash/{id}', [UserController::class, 'trashDurood'])->name('durood.trash');
    Route::post('durood/store', [UserController::class, 'storeDurood'])->name('durood.store');
    Route::post('durood/update', [UserController::class, 'updateDurood'])->name('durood.update');
});
