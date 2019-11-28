@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Post detail</h2>
        </div>
        <div class="col-md-3">
            <img height="200"src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $post->pokemon->id }}.png"></img>
        </div>
        <div class="col-md-9">
            <p><strong>Subject:</strong> {{ $post->subject }}</p>
            <p><strong>User:</strong> {{ $post->user->name }}</p>
            <p><strong>Posted at:</strong> {{ $post->created_at }}</p>
            <p><strong>Content:</strong> {{ $post->content }}</p>
            <a class="btn btn-secondary" href="{{ route('post.index') }}">Go back</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            {{-- @foreach($comment as $com) --}
            <div class="card mb-2">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>{{ $com->content }}</p>
                  <footer class="blockquote-footer">{{ $com->user->name }}</footer>
                </blockquote>
              </div>
            </div>
            {{-- @endforeach --}}
        </div>
        <div class="col-md-6">
            <h3>Comment</h3>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" id="comment" name="comment" placeholder="Comment anything..."></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Comment">
            </form>
        </div>
    </div>
</div>

@stop