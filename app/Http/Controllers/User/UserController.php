<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('User.users.index', ['users' => $users]);
    }
    
    public function show($id){
        $user = User::find($id);
        $posts =  Post::where('user_id', $id)->get();

        return view('User.users.show', ['user' => $user, 'posts' => $posts]);
    }

    public function edit(){
        $user = Auth::user();
        return view('User.users.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request){
        // if ($file = $request->user_image) {
        //     $fileName = time() . $file->getClientOriginalName();
        //     $target_path = public_path('uploads/');
        //     $file->move($target_path, $fileName);
        // } else {
        //     $fileName = "";
        // }


        $user = Auth::user();
        $user->fill($request->all());
        // $user->user_image = $fileName;
        $user->user_image = base64_encode(file_get_contents($request->user_image));
        $user->introduction = $request->introduction;
        $user->save();
       
        return redirect()->back()->with(['message' => '更新しました！']);
    }

    public function unsubscribe(){
        $user = Auth::user();

        return view('User.users.unsubscribe', ['user' => $user]);
    }

    public function withdraw($request){
        $user = Auth::user();
        $user->delete();
        
        return redirect('User/login');
    }
}
