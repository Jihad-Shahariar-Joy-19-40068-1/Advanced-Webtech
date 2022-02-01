<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function contactUs()
    {
        $contacts = [
            (object) array("name" => "Tanvir Ahmed", "role" => "Developer", "email" => "t.a@st.edu"),
            (object) array("name" => "Rayhan Uddin", "role" => "Co-ordinator", "email" => "r.u@st.edu"),
            (object) array("name" => "Mushfiq Rahman", "role" => "Manager", "email" => "ms@st.edu")
        ];
        return view('home.contactUs')->with('contacts', $contacts);
    }
    
    public function login1(){
        return view('home.login1');
    }

    public function home(){
        $courses = [
            (object) array("name" => "Object Oriented Programming", "instructor" => "Mr David", "duration" => "4 Months"),
            (object) array("name" => "Advanced Web Tech", "instructor" => "Md Tanvir Ahmed", "duration" => "4 months"),
            (object) array("name" => "Web Technologies", "instructor" => "Md. Al Amin", "duration" => "3 Months"),
        ];
        return view('home.home')->with('courses', $courses);
    }
    
}
