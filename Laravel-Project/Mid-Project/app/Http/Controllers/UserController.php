<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AllUser;


class UserController extends Controller
{
    //
    
    public function aboutus(){
        return view('home.aboutus');
    }
    public function contactus(){
        return view('home.contactus');
    }
    public function login(){
        return view('home.login');
    }
    public function registration(){
        return view('home.registration');
    }
    public function registrationsubmit(Request $req){

    $this->validate($req,[
            'uname'=>'required|min:3|max:25|regex:/^[A-Z a-z]+$/',
            'password'=>'required',
            'conf_password'=>'required|same:password',
            'email'=>'required|email',
            'dob'=>'required|date|before:2004-01-01'
        ],
        [
            'uname.required'=>' Please provide a Username',
            'uname.min'=>' Username Should be at least 3 characters',
            'uname.max'=>' Username Should not contain more than 25 characters',
            'password.required'=>' Please provide a Password',
            'conf_password.required'=>' Please provide the password again',
            'email.required'=>' Please provide an Email',
            'dob.required'=>' Please provide a date of birth',
            'dob.before'=>' The dob must be a date before 2004-01-01(18 Years or older)'
        ]
    );
        //end of validation
        $user = new AllUser();
        $user->uname = $req->uname;
        $user->password = md5($req->password);
        $user->email = $req->email;
        $user->dob = $req->dob;
        $user->save();

        return "<h2><center>
                Submitted with <br>
                Name: $req->uname <br>
                Password: $req->password <br>
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
            $user = AllUser::where('uname',$req->uname)
            ->where('password',md5($req->password))
            ->first();
            $msg="";
            if($user){
                $req->session()->flash('msg','User Exists & Logged in');
                $req->session()->put('user',$user);
                return redirect()->route('series.list');
            }
            else{
                $req->session()->flash('msg','User-Name & Password Does Not Match');
                return redirect()->route('login');
            }
            
    }

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }

    public function get(Request $req){
        
        //select * from user_info where id = $req->id
        $user = AllUser::where('id','=',decrypt($req->id))
        //middle parameter default '=' if not given
        ->select('id','uname','email','dob','status')
        ->first();  //get() for multiple data.
        
        return view('user.get')
        ->with('user',$user); 
    }

}
