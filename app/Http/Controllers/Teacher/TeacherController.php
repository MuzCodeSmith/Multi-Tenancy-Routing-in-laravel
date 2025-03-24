<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use App\Models\Teacher\Teacher;

class TeacherController extends Controller
{
    public function index(){
        return view('Teacher.teacher-index');
    }

    public function login(){
        return view('Teacher.teacher-login');
    }

    public function matchTeacher(Request $req){
        $creadntials = $req->validate([
            "email"=>"required|email",
            "password"=>"required",
        ]);

        if(Auth::guard("teacher")->attempt($creadntials)){
            // return "valid creadentials";
            
            return redirect()->route('teacher.dashboard');
        }else{
            // return "invalid creadentials";
            return redirect()->route('teacher.login')->with('error', 'Invalid Credentials');
        }
    }

    public function register(){
        return view('Teacher.teacher-register');
    }

    public function saveTeacher(Request $req){
        $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:teachers',
            'password'=>'required|min:6|confirmed',
        ]);

        $user = Teacher::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>Hash::make($req->password),
        ]);

        return redirect()->route('teacher.login',);
    }

    public function dashboard(){
        return view('Teacher.teacher-dashboard');
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('teacher.login');
    }
}
