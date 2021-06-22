<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Cityname;
use App\Models\Genre;
use App\Models\Reply;
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

    public function genreshow($id){
        $genre = Genre::find($id);
        $posts = Post::where('genre_id', $id)->get();

        return view('user.posts.genreshow', ['posts' => $posts, 'genre' => $genre]);
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

        if ($file = $request->post_image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $post = new Post;
        $post->fill($request->all());
        $post->cityname_id = $request->cityname_id;
        $post->genre_id = $request->genre_id;
        $post->post_image = $fileName;
        $post->user()->associate(Auth::user()); 
        $post->save();

        return redirect()->to('user/posts'); 
    }

    public function delete($id){
        $post = Post::find($id);
        $post -> delete();
        
        return redirect()->to('user/posts'); 
    }

    public function reply(Request $request, $id)
    {
        $reply = new Reply;
        $reply->fill($request->all());
        $reply->user()->associate(Auth::user());
        $reply->post()->associate($id);
        $reply->save();

        return redirect()->back();
    }
}

