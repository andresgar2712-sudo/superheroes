<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Universe;
use App\Models\Superhero;
use App\Models\Superpower;

Route::get('/universes', function () {
    $universes = Universe::all();
    return view('universes', compact('universes'));
});

Route::get('/superheroes', function () {
    $superheroes = Superhero::all();
    return view('superheroes', compact('superheroes'));
});

Route::get('/superpowers', function () {
    $superpowers = Superpower::all();
    return view('superpowers', compact('superpowers'));
});
