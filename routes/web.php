<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('main');
});


// Users
Route::controller(UserController::class)->group(function () {
    Route::get('register', 'register')->name('register');

    Route::get('login', 'login')->name('login');

    Route::post('create', 'create')->name('user.registration');

    Route::post('show', 'show')->name('user.login');

    Route::get('logout', 'logout')->name('logout');

    Route::get('login/password', 'forgotPassword')->name('forgotPassword');
});
