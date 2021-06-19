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

        if ($file = $request->genre_image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $genre = new Genre;
        $genre->name = $request->name;
        $genre->image_path = $fileName;
        $genre->save();

        return redirect()->to('admin/genres');
    }

    public function delete($id){
        $genre = Genre::find($id);
        $genre->delete();

        return redirect()->to('admin/genres');
    }
}
