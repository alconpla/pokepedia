@extends('layouts.app')

@section('content')

<style type="text/css">
    .table td, .table th{
        vertical-align: middle;
        text-align:center;
        padding: .55rem;
    }
    
    .btn {
        margin-right: 10px;
    }
    
    .table thead th {
        text-align:center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
			<div class="d-flex justify-content-between">
			    <h2>Pokedex</h2>
			       <div>
			           <a href="{{ action('PokemonController@create') }}" class="btn btn-success btn-sm">Add pokemon</a>
			           <a href="{{ action('AbilityController@create') }}" class="btn btn-success btn-sm">Add ability</a>
			       </div>
			</div>
			
            <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Height</th>
                  <th scope="col">Weight</th>
                  <th scope="col">Image</th>
                  <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pokemon as $poke)
                <tr>
                  <th scope="row">{{ $poke->id }}</th>
                  <td>{{ $poke->name }}</td>
                  <td>{{ $poke->height }}</td>
                  <td>{{ $poke->weight }}</td>
                  <td> <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $poke->id }}.png"></td>
                  <td><a href="{{ route('pokemon.show', $poke->id) }}" class="btn btn-primary btn-sm">View</a><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $pokemon->links() }}
            </div>
        </div>
    </div>
</div>

@stop