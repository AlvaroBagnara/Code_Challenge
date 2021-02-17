<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [ClienteController::class, 'home'])->name('home');
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/{id}', [ClienteController::class, 'show']);
Route::get('/create', [ClienteController::class, 'create'])->name('create');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit']);

Route::put('/create/update/{id}', [ClienteController::class, 'update']);

Route::post('/create/store',[ClienteController::class, 'store']);

Route::delete('/cliente/{id}',[ClienteController::class, 'destroy']);
