<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cityname;

class CitynameController extends Controller
{
    public function index(){
        $citynames = Cityname::all();

        return view('admin.citynames.index', ['citynames' => $citynames]);
    } 

    public function create(Request $request){
        if ($file = $request->cityname_image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
      
        $cityname = new Cityname;
        // $cityname->fill($request->all());
        $cityname->name = $request->name;
        $cityname->cityname_image = $fileName;
        $cityname->save();

        return redirect()->to('admin/citynames');
    }

    public function delete($id){
        $cityname = Cityname::find($id);
        $cityname->delete();

        return redirect()->to('admin/citynames');
    }


}
