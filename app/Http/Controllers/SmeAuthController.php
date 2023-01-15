<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Contracts\Session\Session as SessionSession;
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
            'password' => 'required|min:8|max:8',
            'cpassword' => 'required|min:8|max:8'
        ]);

        $student = new Student();

        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->matricule = $request->matricule;
        $student->dob = $request->dob;
        $student->password = $request->password;
        $student->cpassword = $request->cpassword;


        $res = $student->save();
        if($res){
            if($student->password === $student->cpassword){
                return back()->with('success', 'you have registered');
            }else{
                return back()->with('fail', 'passwords do not match');
            }
        }else{
            return back()->with('fail', 'something went wrong');
        }
    }

    public function loginStudent(Request $request){
        $request->validate([
            'matricule' => 'required',
            'password' => 'required',
        ]);

        $stud_matricule = Student::where('matricule', '=', $request->matricule)->first();
        if($stud_matricule){
            if($stud_matricule->password === $request->password){
                $request->session()->put('loginID', $stud_matricule->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'You password do not match');
            }
        }else{
            return back()->with('fail', 'Oops this matricule does not exist!');
        }
    }

    public function dashboard(){
        return "Welcome to your SWELearn dashboard";
        // $data = array();
        // if(Session::has('loginID')){
        //     $data = Student::where('matricule', '=', Session::get('loginID'))->first();
        // }
        // // pass in data using compact()
        // return view('dashboard', compact('data'));
    }
}
