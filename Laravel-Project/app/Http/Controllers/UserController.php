<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Email or Password is not matched";
            //return alert()->error('Email and password are not matched');

        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function signup(Request $req)
    {
        $this->validate($req,[
            'name'=>'required|min:3|max:30|regex:/^[A-Z a-z]+$/',
            'password'=>'required',
            'email'=>'required|email|regex:/(.*)@myemail\.com/i',
            'dob'=>'required|date'
        ],
        [
            'name.min'=>'Username Should be at least 3 characters',
            'name.max'=>'Username Should not contain more than 30 characters',
            'password.required'=>'Please provide a Password',
            'email.required'=>'Please provide a Email'
        ]
        );
        //end of validation

        //return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->dob=$req->dob;
        $user->save();
        return redirect('/login');
    }

    public function get(Request $req){
        return $req;
        $user = User::where('id','=',$req->id)
        ->select('id','name','email','dob')
        ->first();  //get() for multiple data.
        
        
        return view('/get')
        ->with('user',$user)  ; 
    }
}
