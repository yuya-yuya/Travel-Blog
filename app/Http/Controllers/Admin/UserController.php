<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('Admin.users.index', ['users' => $users]);
    }

    public function edit($id){
        $user = User::find($id);

        return view('Admin.users.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request ,$id){
        if ($file = $request->user_image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }


        $user = User::find($id);
        $user->fill($request->all());
        $user->user_image = $fileName;
        $user->introduction = $request->introduction;
        $user->save();
       
        return redirect()->back()->with(['message' => '更新しました！']);
    }

    public function unsubscribe($id){
        $user = User::find($id);

        return view('Admin.users.unsubscribe', ['user' => $user]);
    }

    public function withdraw($id){
        $user = User::find($id);
        $user->delete();
        $users = User::all();
        
        return view('Admin.users.index', ['users' => $users]);
    }
}
