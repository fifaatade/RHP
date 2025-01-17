<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/form', 'candidate')->name('candidate');
    Route::post('/send/candidate', 'store')->name('store');
    Route::get('/tab', 'indexForm')->name('tab');

});

Route::controller(HomeController::class)->middleware('auth')->group(function(){
    Route::get('/tab', 'indexForm')->name('tab');
});

Route::controller(ExportController::class)->middleware('auth')->group(function(){
    Route::get('/export', 'export')->name('export');
});

Route::controller(UserController::class)->prefix('user')->group(function(){
    Route::get('/register', "register" )->name("register");
    Route::get('/login', "login" )->name("login");
    Route::post('/store/register',"store" )->name("storeUser");    
    Route::get('/verifyEmail/{email}', "verify" )->name("verifyEmail");
    Route::post('/authentification',"authentification" )->name("authentification");    
    Route::get('/forgot_password', "forgetPassword" )->name("forgetPassword");
    Route::post('forgot_password/post',"relogin" )->name("relogin");   
    Route::get('/change_password/{email}', "verifyEmail" )->name("verify");
    Route::post('/password_change',"modifyPassWord")->name("modifyPassWord");
    Route::get('/verify_email/{email}', "modifyPass" )->name("modifyPass");
    Route::get('/logout','logout')->name('logout');

});