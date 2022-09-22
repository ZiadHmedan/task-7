<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $stu = Student::all();
        return $stu; 
      
    }
    public function show($name)
    {
        $student = Student::where('name',$name)->get();
        return $student;
       
    }
    public function destroy($name)
    {
        Student::where('name',$name)->delete();
        return"student deleted";
    }
    public function store(Request $request)
    {
        Student::creat([
            'name'=> $request -> name,
            'address'=> $request -> address,
            
        ] 
        );        
    }
}
