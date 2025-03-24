<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;


use App\Models\Admin\Admin;
use App\Models\Teacher\Teacher;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.admin-index');
    }
   
    public function login(){
        return view('Admin.admin-login');
    }

    public function matchAdmin(Request $req){
        $creadntials = $req->validate([
            "email"=>"required|email",
            "password"=>"required",
        ]);

        if(Auth::guard("admin")->attempt($creadntials)){
            return redirect()->route('admin.dashboard')->with('success', 'Login Successful');
        }else{
            return redirect()->route('admin.login')->with('error', 'Invalid Credentials');
        }

        // if (Auth::attempt($creadntials)) {
        //     // $user = Auth::guard('admin')->user();
        //     // return response()->json(['message' => ucfirst('admin') . ' logged in successfully!', 'user' => $user]);
        //      return redirect()->route('admin.login')->with('error', 'Invalid Credentials');
        // }
    }

    public function register(){
        return view('Admin.admin-register');
    }

    public function saveAdmin(Request $req){
        $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:admin',
            'password'=>'required|min:6|confirmed',
        ]);

        $user = Admin::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>Hash::make($req->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Account Created Successfully');
        // return redirect()->route('admin.login',);
    }

    public function dashboard(){
        return view('Admin.admin-dashboard');
    }

    public function logout(Request $req){
        // Auth::logout();
        // $req->session()->invalidate();
        // $req->session()->regenerateToken();
        // return redirect()->route('admin.login');

        Auth::guard('admin')->logout();
        // return response()->json(['message' => ucfirst('admin') . ' logged out successfully']);
        return redirect()->route('admin.login');
    }

    public function showTeachers(Request $request){
        // $teachers = Teacher::get();
        // return $teachers;
        return view('Admin.admin-records');
    }

    public function editTeacher($id){
        return $id;
    }

    public function getTeachers(Request $request){
      
        if($request->ajax()){
            $query = Teacher::query();

            
            if (!empty($request->name)) {
                $query->where('name', 'like', "%{$request->name}%");
            }

            if (!empty($request->email)) {
                $query->where('email', 'like', "%{$request->email}%");
            }
            if (!empty($request->status)) {
                $query->where('status', 'like', "{$request->status}");
            }
            if (!empty($request->id)) {
                $query->where('id', 'like', "{$request->id}");
            }

            return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('status',function($row){
                    return $row->status === 'active' ? '<span class="badge bg-success" >'.$row->status.'</span>'
                    : '<span class="badge bg-secondary" >'.$row->status.'</span>';
            })
            // ->setRowAttr(['onclick' => "alert('Clicked on ');"])
            // ->filter(function ($query) {
            //     if (request()->filled('name')) {
            //         $query->where('name', 'like', "%" . request('name') . "%");
            //     }
            //     if (request()->filled('email')) {
            //         $query->where('email', 'like', "%" . request('email') . "%");
            //     }
            // })
            ->addColumn('action',function($row){
                return view('partials.edit-button', compact('row'))->render();
            })
            ->editColumn('name','<span class="font-bold text-primary">{{$name}}</span>')
            ->rawColumns(['name','action','status'])
            ->toJson();
        };
       
       
       
            // ->removeColumn('created_at')
            // ->addColumn('status',function($row){
            //     return $row->status === 'active' 
            //     ? '<span class="badge bg-success" >Active</span>'
            //     : '<span class="badge bg-danger" >Inactive</span>';
            // })
            // ->addColumn('action', function($row){
            //     return view('partials.edit-button',compact('row'))->render();
            // })
            // ->rawColumns(['status','action','name'])
            // ->make(true)
        // if ($request->ajax()) {
        //     $teachers = Teacher::select(['id', 'name', 'email', 'created_at']);
        //     return DataTables::of($teachers)
        //     ->addIndexColumn()
        //     ->addColumn('action', function ($row) {
        //         return '<a href="#" class="btn btn-primary btn-sm">Edit</a>';
        //     })
        //     ->rawColumns(['action'])->make(true);
                
        // }

        // ->addColumns(['foo','bar','buzz'=>"red"])->toJson();
    }
}
