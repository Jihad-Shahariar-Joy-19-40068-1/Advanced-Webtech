<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Student;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth.user');
    }
    //
    public function create(){
        return view('student.create');
    }
    public function edit(){
        //Id from request
        //retrive object from elquent
        //pass the object to view
        //show db value in form
        return view('student.edit');      
    }
    public function editSubmit(){
        //do validations
        //retrive object from db using id
        //reinitiate db properties/columns with req values
        //object->save(); (no new student>student::where id = id from parameter)
    }

    public function delete(){
        //object->delete();
        //return view('student.delete');  
    }
    public function get(Request $req){
        
        /*$student = array
        (
            "id" => $req->id,
            "uname" => $req->uname,
            "user_id" => $req->user_id,
            "email" => $req->email,
            "dob" => $req->dob
        );
        $student = (object) $student;*/
        
        //select * from students_info where id = $req->id
        $student = Student::where('id','=',decrypt($req->id))
        //->where('cgpa','>=',3.75)
        //->where('dept','=','CSE') //middle parameter default '=' if not given
        ->select('id','uname','user_id','email','dob','d_id')
        ->first();  //get() for multiple data.
        
        $sum = 12+13;
        return view('student.get')
        ->with('student',$student)  
        ->with('sum',$sum); 
    }
    public function list(){
        
       /* $students=[];
        for($i=1;$i<=10;$i++){
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            $student = array(
                "name"=> "Student $i",
                "id"=> $i,
                "dob"=> $date
            );
            $students[] = (object)$student;
        } */
        // return view('student.create');
        //return $student;


        //select * from students_info
        // $students = Student::all(); //to print/get all
        //$students = Student::whereBetween('cgpa',[3.30,3.75])->get();
        //$students = Student::where('uname','like','%j%')->get();

        // $students = Student::
        // where('cgpa','>=',3.75)
        // ->orWhere('cgpa','<=',3.50)
        // ->get();
        //return $students;
        $students = Student::all();
        return view('student.list')
        ->with('students',$students);
    }
}
