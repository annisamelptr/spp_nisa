<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login', [
            "title"     =>      "LOGIN | PAGE"
        ]);
    }

    public function logindata(Request $request){
        $data = [
            'username'  =>  $request->input('username'),
            'password'  =>  $request->input('password')
        ];

        if(Auth::attempt($data)){
            return redirect('/dashboard');
        } else {
            return redirect('/')->with('error', 'Periksa Nama Pengguna dan Password Anda!');
        }
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
