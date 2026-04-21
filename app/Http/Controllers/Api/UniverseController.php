<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        return Universe::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        return Universe::create($request->all());
    }

    public function show($id)
    {
        return Universe::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $universe = Universe::findOrFail($id);
        $universe->update($request->all());

        return $universe;
    }

    public function destroy($id)
    {
        Universe::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}