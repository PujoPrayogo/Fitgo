<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{


    public function register(Request $request){

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

    public function login(Request $request){
        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){

            $today = Carbon::now();
            switch ($today->dayOfWeek) {
            case Carbon::MONDAY:
                $workout = 'Back';
                break;
            case Carbon::TUESDAY:
                $workout = 'Chest';
                break;
            case Carbon::WEDNESDAY:
                $workout = 'Leg';
                break;
            case Carbon::THURSDAY:
                $workout = 'Rest';
                break;
            case Carbon::FRIDAY:
                $workout = 'Back';
                break;
            case Carbon::SATURDAY:
                $workout = 'Chest';
                break;
                case Carbon::SUNDAY:
                $workout = 'Leg';
                break;
            default:
                $workout = 'No workout scheduled';
                break;
            }

            $auth = Auth::user();
            $user = $request->user();
            $success['token'] = $user->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['email'] = $auth->email;
            $success['bmr'] = (66.5 + ($auth->bodyweight)*13.7) + (5*($auth->height) - (6.8 * ($auth->age)));
            $success['protein'] = (($auth->bodyweight)*0.8);
            $success['air'] = (($auth->bodyweight)*30);
            $success['workout'] = $workout;


            return response()->json([
                'status'=>true,
                'massage'=> "login sukses",
                'data' => $success
            ]);

        }
        else{
            return response()->json([
                'status'=>false,
                'massage'=> "login gagal",
                'data' => null
            ]);
        }
    }
}
