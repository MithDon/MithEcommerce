<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        $is_user= User::where(['email'=>$req->email])->first();
        if(!$is_user || !Hash::check($req->passwordm,$is_user->password)){
            return "Username or password in not matched";
        }else{
            $req->session()->put('user',$is_user);
            return redirect("/");
        }
    }
}
