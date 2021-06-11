<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id){
        $post = Post::find($id);

        return view('posts.show', ['post' => $post]);
    }
}
