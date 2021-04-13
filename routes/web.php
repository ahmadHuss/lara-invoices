<?php

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\SignoutController;
use App\Http\Controllers\Auth\SignupController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('signup', [SignupController::class, 'create'])->name('signup');
Route::post('signup', [SignupController::class, 'store']);

Route::get('signin', [SigninController::class, 'create'])->name('signin');
Route::post('signin', [SigninController::class, 'store']);

Route::post('signout', [SignoutController::class,'store'])->name('signout');
