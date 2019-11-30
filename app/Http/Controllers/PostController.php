<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Auth;
use App\Pokemon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(12);
        return view('post.index')->with(['post' => $post]);
    }

    public function create()
    {
        $pokemon = Pokemon::all();
        return view('post.create')->with(['pokemon' => $pokemon]);
    }

    public function store(Request $request)
    {   
        if (Auth::check()) {
            $request->validate([
                'subject'=>'required',
                'idpokemon'=>'required',
                'content'=>'required'
            ]);
            
            Post::create($request->all());
            return redirect(route('post.index'));
        }
        else {
            return redirect(route('post.create'));
        }
    }

    public function show($id)
    {
        $comments = Comment::where('idpost', $id)->get();
        return view('post.detail', ['post' => Post::findOrFail($id), 'comments' => $comments]);
    }


    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
