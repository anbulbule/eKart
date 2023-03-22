<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        return view('/login');
    }

    public function login(Request $req){
        if($req->email===null && $req->password === null){
            $errors = $req->session()->flash('status','Please enter a valid credential');
            return view('/login',['errors'=>$errors]);
        }
        $req->session()->flash('status','Invalid Credential');
        $user = User::where('email',$req->email)->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            $errors = $req->session()->flash('status','Please enter a valid credential');
            return view('/login',['errors'=>$errors]);
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function register(Request $req){
        if($req->email==null || $req->password==null || $req->username==null){
            $req->session()->flash('status','Please enter a valid credential');
            return view('/register');
        }
        $user = User::create([
            'name' =>$req->username,
            'email' =>$req->email,
            'password' =>Hash::make($req->password),
        ]);
        return redirect('/login');
    }

}
