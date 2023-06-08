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
    Route::get('/cadastro', [\App\Http\Controllers\AuthController::class, 'cadastro'])->name('cadastro');
    Route::post('/cadastro', [\App\Http\Controllers\AuthController::class, 'cadastro'])->name('cadastro.do');
    Route::get('/ocorrencia', [\App\Http\Controllers\AuthController::class, 'ocorrencia'])->name('ocorrencia');
    Route::post('/ocorrencia', [\App\Http\Controllers\AuthController::class, 'ocorrencia'])->name('ocorrencia.do');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/cadastro', function () {
        return view('cadastro');
    })->name('cadastro');
    Route::get('/ocorrencia', function () {
        return view('ocorrencia');
    })->name('ocorrencia');
});
