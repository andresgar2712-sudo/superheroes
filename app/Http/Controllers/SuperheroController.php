<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Universe;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::with('universe')->get();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        $universes = Universe::all();
        return view('superheroes.create', compact('universes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'universe_id' => 'required'
        ]);

        Superhero::create($request->all());

        return redirect()->route('superheroes.index');
    }
}