<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        return Superhero::with('universe')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'universe_id' => 'required'
        ]);

        return Superhero::create($request->all());
    }

    public function show($id)
    {
        return Superhero::with('universe')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $hero = Superhero::findOrFail($id);
        $hero->update($request->all());

        return $hero;
    }

    public function destroy($id)
    {
        Superhero::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}