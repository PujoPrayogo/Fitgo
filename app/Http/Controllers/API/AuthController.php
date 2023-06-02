<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function register(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
            'age' => 'required',
            'bodyweight' => 'required',
            'height' => 'required',
            'bodygoals' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>false,
                'massage'=> "ada kesalahan",
                'data'=> $validator-> errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name'] = $user->name; 

        return response()->json([
            'status' => true,
            'massage' => 'sukses register',
            'data' => $success
        ]);

    }
}
