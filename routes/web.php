<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/superheroes', [SuperheroController::class, 'index'])->name('superheroes.index');
Route::get('/superheroes/create', [SuperheroController::class, 'create'])->name('superheroes.create');
Route::post('/superheroes', [SuperheroController::class, 'store'])->name('superheroes.store');