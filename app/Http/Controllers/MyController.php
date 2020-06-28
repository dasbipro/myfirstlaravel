<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function team($n){
        $names = ['Anik','Shakib','Atish'];
        return view('team',['myname'=>$n,'names'=>$names]);
    }
}
