<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id); 

        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {   
        $user = User::find($id); 

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        dd('動いた！');
    }
}
