<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;

    protected $fillable = ['name','active','created_by'];

    // protected $table = 'student_classes';

    // static public function getRecord()
    // {
    //     $return = StudentClass::select('student_classes.*', 'users.name as created_by_name')
    //     ->join('users', 'users.id','student_classes.created_by')
    //     ->orderBy('student_classes.id','desc');
    //     // ->get();

    //     return $return;

    // }

}
