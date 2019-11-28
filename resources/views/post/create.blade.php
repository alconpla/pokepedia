@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Create Post</h2>
            
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject...">
                </div>
                <div class="form-group">
                    <label for="idpokemon">Select a pokemon</label>
                    <select name="idpokemon" class="form-control" name="idpokemon">
                        @foreach ($pokemon as $pokemon)
                            <option value="{{ $pokemon->id }}">{{ $pokemon->id . '. ' . $pokemon->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="content" name="content" placeholder="Content..."></textarea>
                </div>
                <a class="btn btn-secondary" href="{{ route('post.index') }}">Go back</a>
                <input type="submit" class="btn btn-primary" value ="Create">
            </form>

        </div>
    </div>
</div>

@stop