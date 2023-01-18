<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    public function insertSpecialty(){
        // return "insert specialty";
        return view("auth.specialty");
    }

    public function registerSpecilaty(Request $request){
        // echo "specialty registered";
        $request->validate([
            'specialty' => 'required',
            'semester' => 'required',
            'level' => 'required'
        ]);

        $specialtyInfo = new Specialty();

        $specialtyInfo->specialty = $request->specialty;
        $specialtyInfo->semester = $request->semester;
        $specialtyInfo->level = $request->level;

        $res = $specialtyInfo->save();

        if($res){
            return back()->with('success', 'Hooray specialty is successfully added');
        }else{
            return back()->with('fail', 'Oops, something went wrong');
        }
    }
}
