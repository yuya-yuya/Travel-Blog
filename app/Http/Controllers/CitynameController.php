<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cityname;

class CitynameController extends Controller
{
    public function index(){
        $citynames = Cityname::all();

        return view('citynames.index', ['citynames' => $citynames]);
    } 

    public function create(Request $request){
      
        $cityname = new Cityname;
        // $cityname->fill($request->all());
        $cityname->name = $request->name;
        $cityname->save();

        return redirect()->to('/citynames');
    }

    public function delete($id){
        $cityname = Cityname::find($id);
        $cityname->delete();

        return redirect()->to('/citynames');
    }


}
