<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function store(Request $req)
    {
        $email = $req->email;
        // $password = Hash::make($req->password);  //encrypted
        $password = md5($req->password);
        // excute a quary if this email and password matched
        $user = User::where('email', '=', $email)
            ->where('password', '=', $password)
            ->first();
        //Select * from users where email='bipon@gmail.com' and password="password"
        if ($user) {
            echo 'Succesfully Logged In';
        } else {
            echo "Invalid email or password"; 
        }
    }
}
