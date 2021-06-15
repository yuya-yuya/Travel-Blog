<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();

        return view('admin.genres.index', ['genres' => $genres]);
    }

    public function create(Request $request){
      
        $genre = new Genre;
        $genre->name = $request->name;
        $genre->save();

        return redirect()->to('admin/genres');
    }

    public function delete($id){
        $genre = Genre::find($id);
        $genre->delete();

        return redirect()->to('admin/genres');
    }
}
