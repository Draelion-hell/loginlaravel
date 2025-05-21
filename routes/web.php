<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, "login"])->name('login.sesion');

Route::middleware(['auth'])->group(function(){


    
});

Route::get("/usuarios", [UsersController::class,"index"]);
Route::post("/usuarios", [UsersController::class,"store"]);
Route:: post("/store",[UsersController::class,"store"]);
Route::get("/eliminar/usuario/{id}", [UsersController::class,"destroy"]);
Route::get("/editar/usuario/{id}", [UsersController::class,"edit"]);
Route::post("/actualizar/usuario/{id}", [UsersController::class,"update"]);



