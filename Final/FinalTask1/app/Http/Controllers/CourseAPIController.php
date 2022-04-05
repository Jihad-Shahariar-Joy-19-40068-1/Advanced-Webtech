<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseAPIController extends Controller
{
    //
    public function getAll()
    {
        $courses = Course::all();
        foreach ($courses as $course) {
            $course->department = $course->department;
        }
        return response($courses, 200);
    }

    public function get($id)
    {
        $course = Course::where('c_id', $id)->first();
        if (!$course){
            return response("No Course Available", 404);
        } 
        $course->department = $course->department;
        return response($course, 200);
    }

    public function add(Request $req)
    {
        $course = new Course();
        $course->name = $req->name;
        $course->dept_id = $req->dept_id;
        $course->save();
        return response($course, 291);
    }

    public function update(Request $req)
    {
        $course = Course::where('c_id', $req->id)->first();
        if (!$course) return response('No Course Available', 404);
        $course->name = $req->name;
        $course->dept_id = $req->dept_id;
        $course->save();
        $course->department = $course->department;
        return response($course, 201);
    }

    public function delete($id)
    {
        $course = Course::where('c_id', $id)->first();
        if (!$course){
            return response("No Course Available", 404);
        } 
        $s = $course->delete();
        if ($s) return response("Successfully Deleted", 201);
        return response("Failed in Deletion", 401);
    }
}
