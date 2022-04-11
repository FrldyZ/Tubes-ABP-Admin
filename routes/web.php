<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\olehController;
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
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/dashboard', [HomeController::class,'dashboard'])->middleware('auth:admin');

Route::get('/oleh', [olehController::class,'index'])->middleware('auth:admin');
Route::post('/oleh/edit',[olehController::class,'store'])->middleware('auth:admin');
Route::post('/oleh/delete', [olehController::class,'delete'])->middleware('auth:admin');


// Route::get('/auth-forgot-password.html', function (){
//     return view('auth-forgot-password');
// });