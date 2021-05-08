<?php

use App\Http\Controllers\AnimasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TubesController;
use App\Models\Mahasiswa;

Route::get('/login',[TubesController::class,'login'])->name('login');
Route::get('/registrasi',[TubesController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[TubesController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::post('/postlogin',[TubesController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[TubesController::class,'logout'])->name('logout');


Route::group(['middleware' => ['auth','cekmahasiswa:admin,mahasiswa']], function () {
Route::get('/home',[TubesController::class,'home'])->name('home');
Route::get('/dashboard',[TubesController::class,'dashboard'])->name('dashboard');

Route::post('/scane',[TubesController::class,'store'])->name('scane.store');
Route::get('/scane',[TubesController::class,'scane'])->name('scane');
Route::get('/tampil_scane',[TubesController::class,'tampil_scane'])->name('tampil_scane');

Route::post('/animation',[AnimasiController::class,'store'])->name('animation_store');
Route::get('/animation',[AnimasiController::class,'animation'])->name('animation');
Route::get('/tampil_animasi',[AnimasiController::class,'tampil_animasi'])->name('tampil_animasi');
Route::get('/animation/{animasi}',[AnimasiController::class,'show'])->name('show');
Route::get('/edit/{animasi}', [AnimasiController::class, 'edit'])->name('animasi.edit');
Route::patch('/update/{animasi}', [AnimasiController::class, 'update'])->name('animasi.update');
Route::delete('/delete/{animasi}', [AnimasiController::class, 'delete'])->name('animasi.delete');
});
?>
