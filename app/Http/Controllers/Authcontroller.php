<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function simpanuser(Request $request){
        
        try{
            $validate = $request->validate([
                'username' => 'required|string|unique:user|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:6',
            ]);
        }catch (\Illuminate\Validation\ValidationException $e){
            return back()->withErrors($e->errors())->withInput();
        }
        

        $hashpass = Hash::make($validate['password']);

        $user = new User();
        $user->username = $validate['username'];
        $user->email = $validate['email'];
        $user->password = $hashpass;
        $user->save();

        return redirect('/login');
    }

    public function ceklogin(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }else{
            return back()->withErrors(['email' => 'Email atau password salah']);
        }

    }
}
