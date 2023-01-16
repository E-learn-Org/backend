<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Contracts\Session\Session as SessionSession;
use Session;


class SmeAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }

    public function registerStudent(Request $request){
        // echo 'registered';
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'matricule' => 'required|unique:students|min:7|max:7',
            'dob' => 'required',
            'password' => 'required|min:6',
            'cpassword' => 'required|min:6'
        ]);

        $student = new Student();

        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->matricule = $request->matricule;
        $student->dob = $request->dob;
        $student->password = Hash::make($request->password);
        $student->cpassword = Hash::make($request->cpassword);
        // $student->password = $request->password;
        // $student->cpassword = $request->cpassword;


        $res = $student->save();
        if($res){
            return redirect('login');
        }
        else{
            return back()->with('fail', 'something went wrong');
        }
    }

    public function loginStudent(Request $request){
        $request->validate([
            'matricule' => 'required',
            'password' => 'required',
        ]);

        $student_mat = Student::where('matricule','=', $request->matricule)->first();
        if($student_mat){
            if(Hash::check($request->password, $student_mat->password)){
                $request->session()->put('loginId', $student_mat->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'password do not match');
            }
        }else{
            return back()->with('fail', 'matricule does not exist');
        }
    }

    public function dashboard(){
        // return "Welcome to your SWELearn dashboard";
        $data = array();
        if (Session()->has('loginId')) {
            $data = Student::where('id','=', Session()->get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout(){
        if (Session()->has('loginId')){
            Session()->pull('loginId');
            return redirect('login');
        }
    }
}
