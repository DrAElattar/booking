<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Home\HomeController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\Setting\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|php
*/

 ///////////////////AuthController///////////////////
 Route::group(['prefix'=>'Administration','middleware'=>'auth:admin'], function(){
    Route::get('/', [HomeController::class, 'index'] )->name('admin.home');
    Route::resource('/settings', SettingController::class );
    Route::resource('admins', AdminController::class);


 });
