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
        </div>
    </div>
</div>

@stop