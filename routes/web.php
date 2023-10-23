<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewUsersController;

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
    return view('welcome');
});

Route::get("login", function(){
    return view("login");
})->name("login");


Route::resource('/user', UserController::class);
Route::resource('/viewusers', ViewUsersController::class);
Route::resource('/register', RegisterController::class);
Route::post('/search', 'ViewUsersController@search')->name('search.users');
