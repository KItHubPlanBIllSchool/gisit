<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function registration(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('registration');
    }


    function registrationpost(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            
        ]);
    
        $user = User::create([
            'name' => $request->name, // Make sure to retrieve 'name' from the request
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);
    
        if(!$user){
            return redirect(route('registration'))->with("error", "Registration details are not valid");
        }
    
        return redirect(route('home'))->with("success", "User registered successfully. Please log in.");
    }
    function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }
    function loginpost(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('name', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }
    function logout(){
        Session:flush();
        Auth::logout();
        return redirect(route("login"));
    }
}
