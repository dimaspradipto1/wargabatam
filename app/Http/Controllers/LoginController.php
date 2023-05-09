<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register()
    {
        $data=[
            'title'=> 'Register',
        ];

        return view('pages.login.register', $data);
    }

    public function registerproses(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role'=> $request->role,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect()->route('login');
    }

    public function login()
    {
        $data=[
            'title'=> 'Login',
        ];

        return view('pages.login.login', $data);
    }

    public function loginproses(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('admin');
        }
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}
