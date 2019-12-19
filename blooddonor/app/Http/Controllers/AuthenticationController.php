<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class AuthenticationController extends Controller
{
    //returns login view page
    public function login(){
        return view('auth.login');
    }

    //Function to validate the user
    public function LoginValidation(Request $request){
        //Validation
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if (Sentinel::authenticate($credentials)) {
            if(Sentinel::inRole('admin')){
                return redirect('/admin/dashboard');
            }else{
                return redirect('/user/dashboard');
            }
        }else{
            \Session::flash('flash_msg','Credentials did not match');
            return redirect('/login');
        }
       // print_r('kapil');

    }

    // Logout
    public function logout(){
        Sentinel::logout();
        return redirect('/');
    }
}
