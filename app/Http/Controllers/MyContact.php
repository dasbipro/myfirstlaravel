<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyContact extends Controller
{
    public function contact($cn){
        $contactlist = ['01866331419','01670407618','01819928474'];
        return view('contact',['contactdetails'=>$cn],['contactlist'=>$contactlist]);
    }
}
