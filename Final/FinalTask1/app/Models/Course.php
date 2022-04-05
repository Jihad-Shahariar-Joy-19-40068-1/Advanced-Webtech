<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    public $timeStamps = false;
    
    public function departments(){
        return $this->belongsTo(Department::class,'d_id');
    }
}
