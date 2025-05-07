<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentShareControllerApi extends Controller
{
    public function allStudents()
    {
        return response()->json(Student::all());
    }

    public function singleStudent($id)
    {
        return response()->json(Student::find($id));
    }

    public function storeStudent(Request $request)
    {
        $request->validate([
            'name'=>"required|string|max:255",
            'email'=>'required|email|unique:students,email',
        ]);

        $student = Student::addNewStudent($request);

        return response()->json([
            'message'=>"Student Added Successfully",
            'student'=>$student
        ]);
    }
}
