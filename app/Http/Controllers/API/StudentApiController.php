<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\StudentRepositoryInterface;

class StudentApiController extends Controller
{

    public $studentRepo;


    public function __construct(StudentRepositoryInterface $studentRepoObj)
    {
        $this->studentRepo = $studentRepoObj;
    }

    public function index()
    {
        $students = $this->studentRepo->all();
         return response()->json($students);
    }
    public function find($id)
    {
        $student = $this->studentRepo->find($id);
         return response()->json($student);
    }
    public function store(Request $request)
    {
         $this->studentRepo->store($request);
         return response()->json("Student added Successfully");
    }

    public function update($id,Request $request)
    {
        $isExist = Student::find($id);
        if($isExist == null){
            return response()->json('Invalid ID!!');
        }
         $this->studentRepo->update($id,$request);
         return response()->json("Student updated Successfully");
    }

    public function delete($id)
    {
        $isExist = Student::find($id);

        if($isExist == null){
            return response()->json('Invalid ID!!');
        }

         $this->studentRepo->delete($id);
        return response()->json('Deleted Successfully');
    }

}
