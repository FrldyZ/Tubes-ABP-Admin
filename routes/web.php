<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\olehController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\transaksi\batalController;
use App\Http\Controllers\transaksi\belumAmbilController;
use App\Http\Controllers\transaksi\belumBayarController;
use App\Http\Controllers\transaksi\sudahAmbilController;

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
Route::post('/oleh/tambah',[olehController::class,'store'])->middleware('auth:admin');
Route::post('/oleh/edit/{id}',[olehController::class,'edit'])->middleware('auth:admin');
Route::post('/oleh/delete/{id}', [olehController::class,'delete'])->middleware('auth:admin');

Route::get('/pengguna', [penggunaController::class,'index'])->middleware('auth:admin');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/transaksi/batal', [batalController::class,'index'])->middleware('auth:admin');
Route::get('/transaksi/batal/{id}/view', [batalController::class,'view'])->middleware('auth:admin');
Route::get('/transaksi/belum_bayar', [belumBayarController::class,'index'])->middleware('auth:admin');
Route::get('/transaksi/belum_ambil', [belumAmbilController::class,'index'])->middleware('auth:admin');
Route::get('/transaksi/belum_ambil/{id}/view', [belumAmbilController::class,'view'])->middleware('auth:admin');
Route::post('transaksi/belum_ambil/{id}/konfirmasi', [belumAmbilController::class,'confirm'])->middleware('auth:admin');
Route::get('/transaksi/sudah_ambil', [sudahAmbilController::class,'index'])->middleware('auth:admin');
Route::get('/transaksi/sudah_ambil/{id}/view', [sudahAmbilController::class,'view'])->middleware('auth:admin');
Route::post('/transaksi/belum_bayar/{id}/konfirmasi', [belumBayarController::class,'confirm'])->middleware('auth:admin');
