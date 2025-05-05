<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $studentRepo;

    public function create(){
        return view('admin.student.create');
    }
    public function __construct(StudentRepositoryInterface $studentRepoObj)
    {
        $this->studentRepo = $studentRepoObj;
    }

    public function store(Request $request){
       $request->validate([
            'name'  => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'email' => 'required|email|unique:students,email',
            'phone'=>'required|regex:/^01[3-9][0-9]{8}$/|unique:students,phone',
            'date_of_birth'=>'required'
            ],

            ['name.required' => "Name  dao .",
              'name.regex'   => "shudhu okkhor dao .",
              'name.max'      => "250 er besi na",

                'email.required'=> "Email lagbe",
                'email.string'=> "sothik kore likhun",
                'email.unique'=> "eta to ase , notun kore dao",

                'phone.required'=>"Phone Number lagbei",
                'phone.unique'=>"age theke use hocce notun number add koro",
                'phone.regex'=>"number obbsoy 011 012 010 dia  shuru hote parbe na total 11 digit "

         ] );
        $this->studentRepo->store($request);
        //Student::addNewStudent($request);
        return back()->with("message","New student added successfully");
    }

    public function allStudent(Request $request){

        //$students = $this->studentRepo->all();
        $total = $this->studentRepo->totalStudent();

        if(isset($request->name)){
            $students = $this->studentRepo->search($request->name);
        }
//        if($request->filled('name')){
//            $students = $this->studentRepo->search($request->name);
//            //$students = Student::where('name','like', "%{$request->name}%")->orWhere('email','like' ,"%{$request->name}%")->paginate(5);
//        }
        else {
            $students = $this->studentRepo->all();
        }
         return view('admin.student.list',compact('students','total'));
    }

    public function edit($id){
        $student =$this->studentRepo->find($id);
       return view('admin.student.edit',compact('student'));
    }
    public function update($id,Request $request){
        $page = $request->input('page');
        //return $page;
        $request->validate([
            'name'  => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'email' => 'required|email|unique:students,email,'.$id,
            'phone' => 'required|regex:/^01[3-9][0-9]{8}$/|unique:students,phone,' . $id,
            'date_of_birth'=>'required'
        ],

            ['name.required' => "Name  dao .",
                'name.regex'   => "shudhu okkhor dao .",
                'name.max'      => "250 er besi na",

                'email.required'=> "Email lagbei",
                'email.string'=> "sothik kore likhun",
                'email.unique'=> "eta to ase , notun kore dao ba ager ta dao",

                'phone.required'=>"Phone Number lagbei",
                'phone.unique'=>"age theke use hocce notun number add koro ba bortoman tai  thakuk",
                'phone.regex'=>"number don't start with 011 012 010 and total digit must be 11",

            ] );
        $this->studentRepo->update($id,$request);

        //Student::updateStudent($id,$request);
        return redirect('/student-list?page=' . $page)->with("updateMessage","post updated successfully");


    }

    public function delete($id){
       // Student::deleteStudent($id);
        $this->studentRepo->delete($id);
        return back()->with('message','Student deleted successfully');
    }


}
