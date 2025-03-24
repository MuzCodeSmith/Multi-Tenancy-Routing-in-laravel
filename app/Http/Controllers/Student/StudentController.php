<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\Student\Student;
use Illuminate\Support\Facades\Hash;



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

        $record = Student::where('email',$reql->email)->first();
        if($record->active != 0){           
        
            if(Auth::guard("student")->attempt($creadntials)) {
                return redirect()->route('student.dashboard');
            }else{
                return redirect()->route('student.login')->with('error', 'Invalid Credentials');
            }
        }
        
        return redirect()->route('student.login')->with('error', 'Account is not active');
    }

    public function register(){
        return view('Student.student-register');
    }
    public function saveStudent(Request $req){
        $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:teachers',
            'password'=>'required|min:6|confirmed',
        ]);
        
        $user = Student::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>Hash::make($req->password),
            "active"=>$req->active,
        ]);

        return redirect()->route('student.login',);
    }
    

    public function dashboard(){
        return view('Student.student-dashboard');
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('student.login');
    }
}
