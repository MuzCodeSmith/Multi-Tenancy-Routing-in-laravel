<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\Student\Student;


class StudentController extends Controller
{
    
    public function index(){
        return view('Student.student-index');
    }

    public function login(){
        return view('Student.student-login');
    }

    public function matchStudent(Request $req){
        $creadntials = $req->validate([
            "email"=>"required|email",
            "password"=>"required",
        ]);

    
        if(Auth::attempt($creadntials)){
            return redirect()->route('student.dashboard');
        }else{
            return redirect()->route('student.register');
        }
    }

    public function register(){
        return view('Student.student-register');
    }
    public function saveStudent(Request $req){
        $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:students',
            'password'=>'required|min:6|confirmed',
        ]);

        $user = Student::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>$req->password
        ]);

        return redirect()->route('student.login');
    }
    

    public function dashboard(){
        return view('Student.student-dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('student.login');
    }
}
