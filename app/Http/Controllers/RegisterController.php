<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    
    public function signup(Request $request)
    {
        $data = $this->validate($request,[
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password'=> 'required|min:6|confirmed',
        ]);
        
        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        Auth::attempt($request->only('email','password'));

        return redirect()->route('posts.index');
    }

    
}
