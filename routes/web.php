<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.sesion');

Route::post('/usuarios', [UsersController::class, 'store']);
Route::post('/store', [UsersController::class, 'store']);


Route::middleware(['auth', 'account'])->group(function () {
    Route::get('/usuarios', [UsersController::class, 'index']);
    
    Route::get('/eliminar/usuario/{id}', [UsersController::class, 'destroy']);
    Route::get('/editar/usuario/{id}', [UsersController::class, 'edit']);
    Route::post('/actualizar/usuario/{id}', [UsersController::class, 'update']);
    Route::resource('post',BlogController::class);
    Route::get('/post/eliminar/{id}', [BlogController::class, 'destroy']);
     

   
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/users/active/account/{token}',[LoginController::class,'validateAccount']);




