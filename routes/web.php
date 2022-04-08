<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});
Route::get('/table.html', function () {
    return view('table');
});
Route::get('/form.html', function () {
    return view('form');
});
Route::get('/tableproduc.html', function () {
    return view('tableproduc');
});
Route::get('/auth-login.html', function (){
    return view('auth-login');
});

Route::get('/auth-register.html', function (){
    return view('auth-register');
});

Route::get('/auth-forgot-password.html', function (){
    return view('auth-forgot-password');
});

Route::post('/register-user',[RegisterController::class,'registerUser'])->name('register-user');