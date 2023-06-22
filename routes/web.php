<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['as' => 'auth.'], function () {
    Route::get('/', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.do');
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix'=>'usuarios','as'=>'users.'],function(){
        Route::get('/',[\App\Http\Controllers\Users::class, 'index'])->name('index');
        Route::get('/cadastro',[\App\Http\Controllers\Users::class,'create'])->name('cadastro');
        Route::post('/store',[\App\Http\Controllers\Users::class,'store'])->name('store');
        Route::get('/editando/{id}',[\App\Http\Controllers\Users::class,'edit'])->name('edit');
        Route::put('/update/{id}',[\App\Http\Controllers\Users::class,'update'])->name('update');
        Route::get('/delete/{id}',[\App\Http\Controllers\Users::class,'destroy'])->name('delete');
    });

    Route::get('/dash', function(){
        return view('dash');
    })->name('dash');

    Route::get('/ocorrencia', [\App\Http\Controllers\Ocorrencia::class,'index'])->name('ocorrencia');

});
