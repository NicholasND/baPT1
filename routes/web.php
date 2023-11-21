<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\laporanMahasiswaController;
use App\Http\Controllers\matakuliahController;

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/Selamatdatang', function () {
    return view('Selamat Datang');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/mahasiswa', [mahasiswaController::class, 'index']); 
    //return view('mahasiswa');
Route::get('/matakuliah', [matakuliahController::class, 'index']);

Route::get('/Program_Studi', [Program_StudiController::class, 'index']); 
    //return view('Program_Studi');
Route::get('/Pembayaran', [PembayaranController::class, 'index']);
Route::get('/Transkrip_Akademik', [Transkrip_AkademikController::class, 'index']); 

Route::get('/laporan', [LaporanController::class,'index']);
Route::get('/laporan/cetak_pdf', [LaporanController::class,'cetak_pdf']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
