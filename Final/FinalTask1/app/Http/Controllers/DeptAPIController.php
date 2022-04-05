<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeptAPIController extends Controller
{
    //
    public function get(Request $req){

        $department = Department::where('id', $req->id)->first();
        if (!$department) 
        {
            return response("No Department Found", 404);
        }
        else{
            $department->courses = $department->courses;
            return response($department, 200);
        }       
    }
    public function getAll()
    {
        $departments = Department::all();
        foreach ($departments as $department) {
            $department->courses = $department->courses;
        }

        return response($departments, 200);
    
        
    }
    public function add(Request $req)
    {
        $department = new Department();
        $department->name = $req->name;
        $department->save();
        return response($department, 200);
    }

    public function update(Request $req)
    {
        $department = Department::where('id', $req->id)->first();
        if (!$department) return response('No Department Found', 404);
        $department->name = $req->name;
        $department->save();
        $department->courses = $department->courses;
        return response($department, 200);
    }

    public function delete(Request $req)
    {
        $department = Department::where('id', $req->id)->first();
        if (!$department) return response("No Department Found", 404);
        $s = $department->delete();
        if ($s) {
            return response("Deleted successfully", 200);
        }
        else{
            return response("Deletion failed", 401);
        }
       
    }
}
