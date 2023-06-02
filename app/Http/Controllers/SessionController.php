<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("front/login");

    }

    function login(Request $request){

    //     Session::flash('email', $request->email);
    //     $request->validate([
    //         'email'=>'required',
    //         "password" => 'required',
    //     ],[
    //         'email.required'=>'email perlu diisi',
    //         "password.required" => 'password perlu diisi',
    //     ]
    // );

    // $infologin = [
    //     "email" => $request->email,
    //     "password" => $request->password,
    // ];

    // if(Auth::attempt($infologin)){
    //     return redirect("landingPage")->with("success", "berhasil login");
    // }else{
    //     return redirect("sesi")->withErrors("username dan password yang dimasukan tidak valid");
    // }

    return view('front/login');

    }

    function logout(){
        Auth::logout();
        return redirect("sesi")->with("success", "berhasil logout");
    }

    function register(){
        return view("front/register");
    }

    function create(Request $request){
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        Session::flash('age', $request->age);
        Session::flash('bodyweight', $request->bodyweight);
        Session::flash('height', $request->height);
        $request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'age'=>'required',
            'bodyweight'=>'required',
            'height'=>'required',
            "password" => 'required|min:6',
        ],[
            'name.required'=>'nama perlu diisi',
            'email.required'=>'email perlu diisi',
            'email.email' => 'silahkan masukkan email yang valid',
            'email.unique' => 'email sudah pernah digunakan silahkan pilih email yang lain',
            'age.required'=>'umur perlu diisi',
            'bodyweight.required'=>'berat badan perlu diisi',
            'height.required'=>'tinggi badan perlu diisi',
            "password.required" => 'password perlu diisi',
            'password.min' => "minimal karaketer password adalah 6 karakter"
        ]
    );

    $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->email,
        'bodyweight'=>$request->email,
        'height'=>$request->email,
        'password'=>Hash::make($request->password),

    ];

    User::create($data);

    $infologin = [
        "email" => $request->email,
        "password" => $request->password,
    ];

    if(Auth::attempt($infologin)){
        return redirect("landingPage")->with("success", Auth::user()->name."berhasil login");
    }else{
        return redirect("sesi")->withErrors("username dan password yang dimasukan tidak valid");
    }

    }

}
