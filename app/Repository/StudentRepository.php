<?php


namespace App\Repository;


use App\Models\Student;
use App\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
    {
        public function all(){
            return Student::latest()->paginate();

        }

        public function find($id){
            return Student::find($id);
        }
        public function store($request){
            return Student::addNewStudent($request);
        }
        public function update($id,$request){
            return Student::updateStudent($id,$request);
        }

        public function delete($id){
            return Student::deleteStudent($id);

        }
        public function search($name){
            $students = Student::where('name','like', "%{$name}%")->orWhere('email','like' ,"%{$name}%")->paginate(5)->appends(['name' => $name]);
            return $students;
        }
        public function totalStudent(){
            return Student::count();
        }

}
