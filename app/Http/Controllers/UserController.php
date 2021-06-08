<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id){
        $user = User::find($id);

        return view('users.show', ['user' => $user]);
    }

    public function edit(){
        $user = Auth::user();

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();
       
        return redirect()->back()->with(['message' => '更新しました！']);
    }
}
