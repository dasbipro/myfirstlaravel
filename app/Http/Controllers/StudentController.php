<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all(); //work as, select * from student table
        return view('students',['students'=>$students]);
    }




    public  function create()
    {
        return view('Add-Student');
    }





    public function store(Request $req){
        $name = $req->name;
        $email = $req->email;
        $dob = $req->dob;

        $obj = new Student();  

        $obj->name = $name;
        $obj->email = $email;
        $obj->dob = $dob;

        if($obj->save()){
            echo 'Succesfully Inserted!';
        }
        //eloquent syntax

        return redirect()->to('students');
        //eloquent syntax

    }
}
