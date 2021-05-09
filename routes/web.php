<?php

use App\Http\Controllers\AnimasiController;
use App\Http\Controllers\DraggableController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SceneController;
use App\Http\Controllers\TubesController;
use App\Models\Mahasiswa;
use GuzzleHttp\Psr7\Request;

Route::get('/', function(){ return view('user.landing-page'); });

Route::get('/login',[TubesController::class,'login'])->name('login');
Route::get('/registrasi',[TubesController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[TubesController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::post('/postlogin',[TubesController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[TubesController::class,'logout'])->name('logout');


Route::group(['middleware' => ['auth','cekmahasiswa:admin,mahasiswa']], function () {
    Route::get('/home',[TubesController::class,'home'])->name('home');
    Route::get('/dashboard',[TubesController::class,'dashboard'])->name('dashboard');

    Route::name('scene.')->group(function () {
        Route::get('/scene/models/{id}', [SceneController::class,'showModels'])->name('list-model');
        Route::get('scene/add-new',[SceneController::class,'scane'])->name('add-new');
        Route::get('/scene/show',[SceneController::class,'index'])->name('show');
        Route::post('/scane',[SceneController::class,'store'])->name('store');
    });


    Route::post('/animation',[AnimasiController::class,'store'])->name('animation_store');
    Route::get('/animation',[AnimasiController::class,'animation'])->name('animation');
    Route::get('/tampil_animasi',[AnimasiController::class,'tampil_animasi'])->name('tampil_animasi');
    Route::get('/animation/{animasi}',[AnimasiController::class,'show'])->name('show');
    Route::get('/edit/{animasi}', [AnimasiController::class, 'edit'])->name('animasi.edit')->middleware('userlimitaccess');
    Route::patch('/update/{animasi}', [AnimasiController::class, 'update'])->name('animasi.update');
    Route::delete('/delete/{animasi}', [AnimasiController::class, 'delete'])->name('animasi.delete')->middleware('userlimitaccess');

    Route::get('/draggable', [DraggableController::class, 'index']);
});
?>
