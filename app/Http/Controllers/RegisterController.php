<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    public function show(){
    	return view('register');
    }

    public function create(Request $request){
    	$validator = $request->validate([
    	'email' => 'required|email|unique:users',
    	'password' => 'required|confirmed|min:6'
    ]);

    	$user = new User();
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->save(); 

    	return view('register_successful')->with('user', $user);

    }
}
