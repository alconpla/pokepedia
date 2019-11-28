@extends ('layouts.app')

@section('content')

<style type="text/css">
    input[type="file"] {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    label[for="image"]{
        cursor: pointer;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Create Pokemon</h2>
            <form action="{{ route('pokemon.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="height" name="height" placeholder="Height...">
                </div>
                <div class="form-group">
                    <label for="image" class="btn btn-info">Upload image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <a class="btn btn-secondary" href="{{ route('pokemon.index') }}">Go back</a>
                <input type="submit" class="btn btn-primary" value="Create">
            </form>

        </div>
    </div>
</div>

@stop