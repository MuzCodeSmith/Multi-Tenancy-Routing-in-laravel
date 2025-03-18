<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        if(Auth::attempt($creadntials)){

            return redirect()->route('teacher.dashboard');
        }else{
            return redirect()->route('teacher.register');
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
            "password"=>$req->password
        ]);

        return redirect()->route('teacher.login',);
    }

    public function dashboard(){
        return view('Teacher.teacher-dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('teacher.login');
    }
}
