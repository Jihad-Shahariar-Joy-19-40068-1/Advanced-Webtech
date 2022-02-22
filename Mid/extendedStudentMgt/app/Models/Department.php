<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Department extends Model
{
    use HasFactory;
    public $timeStamps = false;

    //relationship functions
    public function students(){
        return $this->hasMany(Student::class,'d_id');
    }

    public function Courses(){
        return $this->hasMany(Course::class,'offered_by');
    }
}
