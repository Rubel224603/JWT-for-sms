<?php


namespace App;


interface StudentRepositoryInterface
{
     public function all();
     public function find($id);
    public function store($request);
    public function update($id,$request);
    public function delete($id);
    public function search($request);
    public function totalStudent();
}
