<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\StudentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use function Illuminate\Foundation\Testing\Concerns\json;

class ApiControllerForSanctum extends Controller
{
    protected $studentRepo;

    public function __construct(StudentRepositoryInterface $studentRepo)
    {
        $this->studentRepo= $studentRepo;

    }


    public function login(Request $request)
    {
        $request->validate([
            'email'=>"required|email",
            "password"=>"required"
        ]);

        $credentials = $request->only('email','password');

        if(!Auth::attempt($credentials)){
            return response()->json(
                ['message'=>'Invalid Credential'],401);
        }
        $user = Auth::user();

       $token  = $user->createToken('sanctum-api-token')->plainTextToken;

       return response()->json([
           'message' => 'Login successful',
                'token' => $token,
                'token_type' => 'Bearer',
           ]
       );

    }
    public function index(){
        $students = $this->studentRepo->all();
        return response()->json($students);
    }

    public function find($id)
    {
        $isExist = Student::find($id);

        if($isExist == null){
            return response()->json('Invalid ID!!');
        }
        $student =  $this->studentRepo->find($id);
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
