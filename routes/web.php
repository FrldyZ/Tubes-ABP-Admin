<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate']);
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


// Route::get('/auth-forgot-password.html', function (){
//     return view('auth-forgot-password');
// });