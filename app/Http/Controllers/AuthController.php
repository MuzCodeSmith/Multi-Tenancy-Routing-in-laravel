<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function registerPage(){
        return view('register-page');
    }
    public function loginPage(){
        return view('login-page');
    }
    public function registerUser(Request $req){
        $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);

        $user = User::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>$req->password
        ]);

        return redirect()->route('login.page',);
    }

    public  function loginUser(Request $req){
        $creadntials = $req->validate([
            "email"=>"required|email",
            "password"=>"required",
        ]);

        if(Auth::attempt($creadntials)){
            return "credentials matched!";
        }else{
            return "invalid credentials matched!";
        }
    }
}
