<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        Auth::attempt($data);

        return redirect()->route('posts.index');
    }

    
   
}
