<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

#guest
Route::get('/', [UIController::class, 'login'])->name('login');
Route::post('make-login', [UIController::class, 'make_login'])->name('make.login');

Route::get('/register', [UIController::class, 'register'])->name('register');
Route::post('make-account', [UIController::class, 'make_account'])->name('make.account');

Route::get('/runmymigration', [UIController::class, 'runmymigration'])->name('runmymigration');

#AfterLogin
Route::group(['middleware' => 'disable_back_btn'], function () {
Route::group(['middleware' => ['auth']], function()
{ 
    Route::get('/dashboard', [UIController::class, 'dashboard'])->name('dashboard');
    Route::get('signout', [UIController::class, 'signout'])->name('signout');
});
});
