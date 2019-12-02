@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Pokemon detail</h2>
        </div>
        <div class="col-md-7">
            <img height="500" class="img-fluid" src="https://pokeres.bastionbot.org/images/pokemon/{{ $pokemon->id }}.png"></img>
        </div>
        <div class="col-md-4">
            <p><strong>Name:</strong> {{ $pokemon->name }}</p>
            <p><strong>Height:</strong> {{ $pokemon->height }}</p>
            <p><strong>Weight:</strong> {{ $pokemon->weight }}</p>
            <a class="btn btn-secondary" href="{{ route('pokemon.index') }}">Go back</a>
            <hr>
            <h3>Add ability to this pokemon</h3>
            <form action="{{ route('abilitypokemon.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="idpokemon">Select an ability</label>
                    <select name="idability" class="form-control" name="idability">
                        @foreach ($abilities as $ability)
                            <option value="{{ $ability->id }}">{{ $ability->id . '. ' . $ability->ability }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="idpokemon" value="{{ $pokemon->id }}">
                <input type="submit" class="btn btn-primary" value ="Add">
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h3>Abilities</h3>
                <ul class="list-group">
                @foreach ($pokemonabilities as $ab)
                    <li class="list-group-item">{{ $ab->ability->ability }}</li>
                @endforeach
                </ul>
        </div>
    </div>
</div>

@stop