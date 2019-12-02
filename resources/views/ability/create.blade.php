@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h2>Create ability</h2>
            
            <form action="{{ route('ability.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="ability" name="ability" placeholder="Name for the ability...">
                </div>
                <a class="btn btn-secondary" href="{{ route('pokemon.index') }}">Go back</a>
                <input type="submit" class="btn btn-primary" value ="Create">
            </form>
            
        </div>
    </div>
</div>

@stop