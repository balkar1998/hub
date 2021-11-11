<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    
    // Register user 
    
    function Register(Request $req){

        $user = User::whereEmailAndUserType($req->email,$req->user_type)->first();

        if($user == ""){

            $input = array(
                'firstname' => $req->firstname,
                'lastname' => $req->lastname,
                'password' => $req->password,
                'email' => $req->email,
                'phone' => $req->phone,
                'ref_name' => $req->ref_name,
                'ref_email' => $req->ref_email,
                'hearing' => $req->hearing,
                'user_type' => $req->user_type,
            );

            $data = User::create($input);

        }else{
            return redirect('signup');
        }

        return redirect('login');
    }

    // Login user

    function Login(Request $req){

        

        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::whereEmailAndPasswordAndUserType($req->email,$req->password,$req->user_type)->first();
       
        if($user != ""){
            
            Session::put("type", $req->user_type);
            Session::put("email", $req->email);

            if(session()->get("type") == 1){
                return redirect('/intro');
            }else if(session()->get("type") == 3){
                return redirect('/chat');
            }

        }else{
            return redirect('/login');
        }
    }

}