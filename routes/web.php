<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/animal/create', [AnimalController::class, 'create'])->name('animal.create');
Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('animal.show');
Route::get('/animal/modifier/{id}', [AnimalController::class, 'update'])->name('animal.update');
Route::get('/animal/supprimer/{id}', [AnimalController::class, 'delete'])->name('animal.delete');

Route::fallback(function () {
    return view('errors.404');
});
