<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\Ability;
use App\AbilityPokemon;
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
            'image' => ''
        ]);
        
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $target = '../../../uploads/';
            $name = $file->getClientOriginalName();
            $file->move($target, $name);
        }
        // var_dump($request);
        // exit;
        Pokemon::create($request->all());
        return redirect(route('pokemon.index'));
    }

    public function show($id)
    {
        $abilities = Ability::all();
        $pokemonabilities = AbilityPokemon::where('idpokemon', $id)->get();
        return view('pokemon.detail', ['pokemon' => Pokemon::findOrFail($id), 'abilities' => $abilities, 'pokemonabilities' => $pokemonabilities]);
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
