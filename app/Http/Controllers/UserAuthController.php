<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // to use all user table data
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function login(){
        return view('admin.pages.auth.login');
    }
    public function loginstore(Request $request){ //to get email and password
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email','=',$email)->first(); //first() means one user can use only one email
        //$user = User::where('email','=',$email)->where('password','=',$password)->first();
        //beacause here we only check email

        if(Hash::check($password, $user->password)){
            return redirect()->to('dashboard');
        }
        else{
            return redirect()->to('login');
        }
        //{$user->password} means user's password which we call at $user
        //comparing with the Hash set which is given password
    }
}
