<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Cityname;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('user.posts.index', ['posts' => $posts]);
    }

    public function show($id){
        $post = Post::find($id);

        return view('user.posts.show', ['post' => $post]);
    }

    public function new(){
        $citynames = Cityname::all();
        $genres = Genre::all();
        
        return view('user.posts.new', ['citynames' => $citynames, 'genres' => $genres]);
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = new Post;
        $post->fill($request->all());
        $post->cityname_id = $request->cityname_id;
        $post->genre_id = $request->genre_id;
        $post->user()->associate(Auth::user()); 
        $post->save();

        return redirect()->to('user/posts'); 
    }

    public function delete($id){
        $post = Post::find($id);
        $post -> delete();
        
        return redirect()->to('user/posts'); 
    }
}

