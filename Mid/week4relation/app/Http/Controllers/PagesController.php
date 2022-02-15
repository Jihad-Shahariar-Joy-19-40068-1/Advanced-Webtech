<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

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
        $st->password = $req->password;
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
}
