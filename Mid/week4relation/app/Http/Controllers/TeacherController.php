<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function list(){

         $teachers = Teacher::all();
         return view('teacher.list')
         ->with('teachers',$teachers);
     }
    public function details(Request $req){
        $t = Teacher::where('id',decrypt($req->id))->first();
        return view('teacher.details')->with('t',$t);
    }
    public function studentlist(Request $req){
        $st = Teacher::where('id',decrypt($req->id))->get();
        return view('teacher.teacherstudent')->with('st',$st);
    }
}
