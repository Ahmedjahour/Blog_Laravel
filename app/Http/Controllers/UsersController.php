<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create(){
        return view('users.add');
    }
    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/')->with('success','Compte crée');
    }
    public function login(){
        return view('users.login');
    }
    public function auth(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/');
        }else{
            return redirect()->route('user.login')->with('fail','Email ou mot de passe est incorrect');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
