<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        if($req->email == "admin" && $req->password == "admin1234"){
            $req->session()->put('admin','admin');
            return (redirect("/adminhome"));
        }
       $user = User::where(['email'=>$req->email])->first();

       if(!$user || !Hash::check($req->password,$user->password)){

        return view("errorlogin");
       }
       else{
        $req->session()->put('user',$user);
        return (redirect("/home"));
       }
    }

    function signup(Request $req){
        $user = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->save();
        $a = '28';
        return redirect('/login');
    }
}
