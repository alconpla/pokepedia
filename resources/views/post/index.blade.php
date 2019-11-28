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
			    <h2>Foro</h2>
			       <div>
			           <a href="{{ action('PostController@create') }}" class="btn btn-success btn-sm">Add post</a>
			       </div>
			</div>
			
            <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Subject</th>
                  <th scope="col">User</th>
                  <th scope="col">Posted at</th>
                  <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $p)
                <tr>
                  <th scope="row">{{ $p->id }}</th>
                  <td>{{ $p->subject }}</td>
                  <td>{{ $p->user->name }}</td>
                  <td>{{ $p->created_at }}</td>
                  <td><a href="{{ route('post.show', $p->id) }}" class="btn btn-primary btn-sm">View</td>
                </tr>
                @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $post->links() }}
            </div>
        </div>
    </div>
</div>

@stop