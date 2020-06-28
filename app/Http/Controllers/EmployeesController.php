<?php

namespace App\Http\Controllers;


// use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        //fetch data from database
        $employees1 = DB::table('employee')->get();
        //the data sould be shown in view page
        return view('employee', ['employees11' => $employees1]);
    }


    public function add()
    {
        return view('add');
    }

    public function store(Request $req)
    {

        $Name = $req->get('Name');
        $Email = $req->get('Email');
        $dob = $req->get('dob');

        // dd($req);

        // here, @req->Name,Email,dob COming from Form label input at add.blade.php

        //data = array('Name' => '$Name','Email' => '$Email','dob' => '$dob',);

        DB::table('employee')->insert(
            [
                'Name' => $Name,
                'Email' => $Email,
                'dob' => $dob,


            ]
        );

        // here, name, email, dob are assigned by previous $Name,$Email,$Date variable

        return redirect()->to('employee');



    }
}
