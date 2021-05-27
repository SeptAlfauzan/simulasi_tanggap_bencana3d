<?php

use App\Http\Controllers\AnimasiController;
use App\Http\Controllers\DraggableController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SceneController;
use App\Http\Controllers\TubesController;
use App\Http\Controllers\UserController;
use App\Http\Resources\AnimationCollection;
use App\Models\Animasi;
use App\Models\Mahasiswa;
use GuzzleHttp\Psr7\Request;

Route::name('landing.')->group(function()
{ 
    Route::get('/', [LandingPageController::class, 'index'])->name('home');
    Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
    Route::get('/about-us', [LandingPageController::class, 'aboutUs'])->name('about-us');
    Route::get('/gallery-scene', [LandingPageController::class, 'galleryScene'])->name('gallery-scene');
    Route::get('/show-scene/{scene}', [LandingPageController::class, 'showScene'])->name('show-scene');
});

Route::get('/login',[TubesController::class,'login'])->name('login');
Route::get('/registrasi',[TubesController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[TubesController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::post('/postlogin',[TubesController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[TubesController::class,'logout'])->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home',[TubesController::class,'home'])->name('home');
    Route::get('/dashboard',[TubesController::class,'dashboard'])->name('dashboard');

    Route::name('scene.')->group(['middleware' => ['adminonly']], function () {
        Route::get('/scene/models/{id}', [SceneController::class,'showModels'])->name('list-model');
        Route::get('/scene/add-new',[SceneController::class,'scene'])->name('add-new');
        Route::get('/scene/show',[SceneController::class,'index'])->name('show');
        Route::post('/scane',[SceneController::class,'store'])->name('store');
        Route::delete('/scane/{scene}',[SceneController::class,'delete'])->name('delete');
        Route::get('/scene/restore/{scene}',[SceneController::class,'restore'])->name('restore');
    });

    Route::name('user.')->group(function(){
       Route::get('/users/list', [UserController::class, 'showList'])->name('list');
       Route::get('/users/add-new', [UserController::class, 'addNew'])->name('add-new')->middleware('adminonly');
       Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('edit');
       Route::post('/users/store', [UserController::class, 'storeFromAdmin'])->name('admin-store')->middleware('adminonly');
       Route::patch('/users/update/{user}', [UserController::class, 'update'])->name('update');
       Route::delete('/users/delete/{user}', [UserController::class, 'delete'])->name('delete')->middleware('adminonly');
       Route::get('/users/restore/{user}', [UserController::class, 'restore'])->name('restore')->middleware('adminonly');
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
// Route::get('/animasi/{id}', function($id){
//     return Animasi::find($id);
// });
?>
