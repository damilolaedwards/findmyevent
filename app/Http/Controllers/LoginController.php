<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function show(){
    	return view('login');
    }

    public function login(Request $request){
    	$validatedData = $request->validate([
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
          return redirect()->intended('dashboard');
        }else{
        return redirect()->route('register.show');
        }
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login.show');
    }


}
