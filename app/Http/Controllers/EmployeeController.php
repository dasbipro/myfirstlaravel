<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function add()
    {
        return view('admin.pages.employee.add');
    }
    public function all()
    {
        $emps = Employee::all(); //select * from Employee
        return view('admin.pages.employee.list', ['employees' => $emps]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:employees,email',
            "gender"=> "required",
            "dob"=> "required|date|before:09/20/2020",
            "salary"=> "required|integer|between:10000,50000",
            "description"=> "required",
        ]);

        $name =  $request->name;
        $email = $request->email;
        $gender = $request->gender;
        $dob = $request->dob;
        $salary = $request->salary;
        $description = $request->description;

        $obj = new Employee();
        $obj->name = $name;
        $obj->email = $email;
        $obj->gender = $gender;
        $obj->dob = $dob;
        $obj->salary = $salary;
        $obj->description = $description;

        if ($obj->save()) {
            return \redirect()->back()->with('success', 'Inserted Successfully');
        }
        //Insert into Table_name( Name, Email) Values('')
    }
    public function edit($id)
    {
        // fetch the details of Id=1 or 2
        $emp = Employee::find($id); // id prmary key; Always returns only 1 row
        // Employee::where('id', '=', $id)->first(); // only 1 row will be fetched
        return view('admin.pages.employee.edit', ['employee' => $emp]);
    }

    public function update(Request $request, $id)
    {
        $name =  $request->name;
        $email = $request->email;
        $gender = $request->gender;
        $salary = $request->salary;
        $description = $request->description;

        $obj = Employee::find($id);  //This is class, Model, update already asee emon kichu k korte hobe tai obj create korte hobe na
        $obj->name = $name;
        $obj->email = $email;
        $obj->gender = $gender;
        $obj->salary = $salary;
        $obj->description = $description;
        if ($obj->save()) {
            return redirect()->back()->with('success', 'Updated Successfully');
        }
    }

    public function delete($id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
