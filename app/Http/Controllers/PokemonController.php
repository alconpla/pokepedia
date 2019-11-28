<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::paginate(5);

        return view('pokemon.index')->with(['pokemon' => $pokemon]);
    }

    public function create()
    {
        return view('pokemon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:70',
            'weight' => 'required|max:50',
            'height' => 'required|max:50',
            'image' => 'required|max:250'
        ]);
        
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $target = '../../uploads/';
            $name = $file->getClientOriginalName();
            $file->move($target, $name);
        }
        
        Pokemon::create($request->all());
        return redirect(route('pokemon.index'));
    }

    public function show($id)
    {
        return view('pokemon.detail', ['pokemon' => Pokemon::findOrFail($id)]);
    }

    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
