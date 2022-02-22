<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class PagesController extends Controller
{
    //
    public function index(){
        
        return view('home.index');
    }
    public function login(){
        return view('home.login');
    }
    public function registration(){
        return view('home.registration');
    }
    public function registrationsubmit(Request $req){
    //     $req->validate([
    //         'uname'=>'required|min:3|max:25|regex:/^[A-Z a-z]+$/',
    //         'password'=>'required',
    //         'conf_password'=>'required|same:password',
    //         'id'=>'required|regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}+$/',
    //         'email'=>'required',
    //         'dob'=>'required'
    //     ],
    //     [
    //         'uname.required'=>'Please provide a Username',
    //         'uname.min'=>'Username Should be at least 3 characters',
    //         'uname.max'=>'Username Should not contain more than 25 characters',
    //         'password.required'=>'Please provide a Password',
    //         'id.regex'=>'ID Format XX-XXXXX-X'
    //     ]
    // );

    $this->validate($req,[
            'uname'=>'required|min:3|max:25|regex:/^[A-Z a-z]+$/',
            'password'=>'required',
            'conf_password'=>'required|same:password',
            'id'=>'required|regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}+$/',
            'email'=>'required',
            'dob'=>'required'
        ],
        [
            'uname.required'=>'Please provide a Username',
            'uname.min'=>'Username Should be at least 3 characters',
            'uname.max'=>'Username Should not contain more than 25 characters',
            'password.required'=>'Please provide a Password',
            'conf_password.required'=>'Please provide the password again',
            'id.required'=>'Please provide an ID',
            'id.regex'=>'ID Format XX-XXXXX-X',
            'email.required'=>'Please provide a Email'
        ]
    );
        //end of validation
        $st = new Student();
        $st->uname = $req->uname;
        $st->password = md5($req->password);
        $st->user_id = $req->id;
        $st->email = $req->email;
        $st->dob = $req->dob;
        $st->save();

        return "<h2><center>
                Submitted with <br>
                Name: $req->uname <br>
                Password: $req->password <br>
                ID: $req->id <br>
                Email: $req->email <br>
                DOB: $req->dob
                </center></h2>";
    }

    public function loginsubmit(Request $req){
        $this->validate($req,[
                'uname'=>'required|min:3|max:25|regex:/^[A-Z . a-z]+$/',
                'password'=>'required'
            ],
            [
                'uname.required'=>'Please provide a Username',
                'uname.min'=>'Username Should be at least 3 characters',
                'uname.max'=>'Username Should not contain more than 25 characters',
                'password.required'=>'Please provide a Password'
            ]
        );
            //end of validation
            $student = Student::where('uname',$req->uname)
            ->where('password',md5($req->password))
            ->first();
            $msg="";
            if($student){
                $req->session()->flash('msg','Student Exists');
                $req->session()->put('user',$student->uname);
            }
            else{
                $req->session()->flash('msg','Student Does Not Exists');
            }
            return redirect()->route('home');

            // $teacher = Teacher::where('name',$req->name)
            // ->where('password',md5($req->password))
            // ->first();
            // $msg="";
            // if($teacher){
            //     $req->session()->flash('msg','Teacher Exists');
            //     $req->session()->put('user',$teacher->uname);
            // }
            // else{
            //     $req->session()->flash('msg','Teacher Does Not Exists');
            // }
            // return redirect()->route('teacher.list');
    }

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }

}
