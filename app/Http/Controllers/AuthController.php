<?php

namespace App\Http\Controllers;

use App\Events\LoginUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view("register");
    }
    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6",
            "confirm_password" => "required|same:password"
        ]);

        $data = $request->all();

        /*$data["password"] = bcrypt($request->password);*/

        User::create($data);

        return redirect()->back();

    }

    public function login(){
        return view("login");
    }

    public function auth(Request $request){
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ]);

        Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ], $request->remember);

        if(!Auth::check()){
            return redirect()->back()->with("error", "Invalid credentials");
        }else{
            event(new LoginUser(auth()->user(), $request->ip()));
            return redirect()->route("product.list");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect("/login");
    }

}
