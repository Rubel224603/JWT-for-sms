<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    public static $student;

    use SoftDeletes;

    public static function addNewStudent($request){

        self::$student                  =   new Student();
        self::$student->name            =   $request->name;
        self::$student->email           =   $request->email;
        self::$student->phone           =   $request->phone;
        self::$student->date_of_birth   =   $request->date_of_birth;
        self::$student->save();
    }
    public static function updateStudent($id,$request){

        self::$student                  =   Student::find($id);
        self::$student->name            =   $request->name;
        self::$student->email           =   $request->email;
        self::$student->phone           =   $request->phone;
        self::$student->date_of_birth   =   $request->date_of_birth;
        self::$student->save();
    }

    public static function deleteStudent($id){
        self::$student = Student::find($id);
        self::$student->delete();
    }

}
