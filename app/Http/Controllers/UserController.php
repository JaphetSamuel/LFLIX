<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function formulaire(){
        return view("auth.login");
    }

    function create(Request $request){

        $request->validate([
            "email" => "required|email",
            "password" => "required|min:8"
        ]);

        $user = User::create([
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "name"=> $request->email
        ]);

        return redirect()->route("user.form");
    }

    function login(Request $request){

        $request->validate([
            "email" => "required|email",
            "password" => "required|min:8"
        ]);

        $user = User::where("email", $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return redirect()->route("user.form")->withErrors("Mauvais identifiants ou password");
        }

        $request->session()->put("user", $user);

        auth()->login($user);

        return redirect()->route("film.list");
    }
}
