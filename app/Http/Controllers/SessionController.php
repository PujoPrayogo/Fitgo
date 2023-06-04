<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
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

        $email = $request->email;
        $password = $request->password;

        $infologin = [
            "email" => $email,
            "password" => $password,
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/login";
        $response = $client->request('POST', $url, [
            'headers'=>['content-type'=>'application/json'],
            'body'=>json_encode($infologin)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            print_r($contentArray);

            return redirect()->to('sesi/login')->withErrors($error)->withInput();

        } else{
            print_r($contentArray);
            $user = $contentArray['data']['name'];
            return redirect()->to('fitgo/'.$user)->with('success', 'Berhasil Login');
        }

    }

    function logout(){
        Auth::logout();
        return redirect("sesi")->with("success", "berhasil logout");
    }

    function register(){
        return view("front/register");
    }


    function register_continue(Request $request){

        $email = $request->email;
        $password = $request->password;
        $name = $request->name;

        $data = [
        'name'=> $email,
        'email'=> $name,
        'password'=> $password,
    ];

        if($request->password == $request->confirm_password){
            return view("front/register2")->with('email', $email)->with('password', $password)->with('name', $name);

        }else{
            return redirect('sesi/register')->with('fail', 'Silahkan masukkan ulang password');
        }
        
    }

    function create(Request $request){
        $email = $request->email;
        $password = $request->password;
        $name =  $request->name;
        $weight = $request->weight;
        $height = $request->height;
        $gender = $request->gender;
        $age = $request->age;
        $body_goals = $request->bodygoals;

        $infoRegister = [
            "name" => $name, 
            "email" => $email,
            "password" => $password,
            "age" => $age, 
            "bodyweight" => $weight, 
            "height" => $height, 
            "bodygoals" => $body_goals, 
            "gender" => $gender, 

        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/register";
        $response = $client->request('POST', $url, [
            'headers'=>['content-type'=>'application/json'],
            'body'=>json_encode($infoRegister)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            print_r($contentArray);

            return redirect()->to('sesi/register')->withErrors($error)->withInput();

        } else{
            print_r($contentArray);
            return redirect()->to('sesi')->with('success', 'Berhasil Register, Silahkan Login');
        }

       


        
    }

}
