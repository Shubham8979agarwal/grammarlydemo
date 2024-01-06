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

#AfterLogin
Route::group(['middleware' => 'disable_back_btn'], function () {
Route::group(['middleware' => ['auth']], function()
{ 
    Route::get('/dashboard', [UIController::class, 'dashboard'])->name('dashboard');

    Route::get('/create-document', [UIController::class, 'createdocument'])->name('create-document');
    Route::post('savedocument', [UIController::class, 'savedocument'])->name('savedocument');

    Route::get('/edit-document/{id}', [UIController::class, 'editdocument'])->name('edit-document');
    Route::post('update-document', [UIController::class, 'updatedocument'])->name('update-document');

    Route::get('deletedocument/{id}', [UIController::class, 'deletedocument'])->name('deletedocument');

    Route::get('signout', [UIController::class, 'signout'])->name('signout');
});
});
