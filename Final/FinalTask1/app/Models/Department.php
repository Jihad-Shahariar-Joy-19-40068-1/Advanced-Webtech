<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table='departments';
    public $timestamps = false;

    public function courses(){
        return $this->hasMany(Course::class,'d_id');
    }
}
