<?php

namespace App\Http\Controllers;

use App\Models\daily_activities;
use App\Models\user_weight_overtime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
   

    public function index(Request $request)
    {
        if(auth()->check()){
        $data = Auth::user();

        $id = $data->id;

        $data_activity = daily_activities::where("user_id", $id)->orderBy('time', 'desc')->get();
        $data_weight = user_weight_overtime::where("user_id", $id)->orderBy('created_at', 'desc')->get();
        $kcalsum = daily_activities::where("user_id", $id)->sum('kcal');

        
        $name = $data->name;
        $bmr = (66.5 + (13.7 * $data->bodyweight) + (5 * $data->height) - (6.8 * $data->age));
        $bmr_static = $bmr - $kcalsum;
        $water = ($data->bodyweight*0.03);
        $protein = ($data->bodyweight*0.8);
        $workout = $this->workout();
        $bmi = ($data->bodyweight / (($data->height*0.01)*($data->height*0.01)));
        $ideal_weight = (22/ (($data['height']*0.01)*($data['height']*0.01)));
        if($bmi < 18.5 || $bmi > 25){
            $weight_change = $data->bodyweight - $ideal_weight ;
        }else{
            $weight_change = 0;
        }
            
        $data = [
            'name' => $name,
            'bmr' => number_format($bmr, 1),
            'bmr_static' => number_format($bmr_static, 1),
            'workout' => $workout,
            'protein' => number_format($protein, 1),
            'water' => number_format($water, 1),
            'weight_change' => number_format($weight_change, 1),
            'bmi'=> $bmi,
        ];

        return view('front/dashboard-main', ['data'=> $data], ['data_activity'=> $data_activity], ['data_weight'=> $data_weight], ['name'=> $name]);

        }else{
            return "not authorized";
        }
        

    }

    public function workout(){
        $today = Carbon::now();
        $workout = '';

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
            default:
                $workout = 'No workout scheduled';
                break;
    }

        return $workout;
    }

    public function userData($token){
        $client = new Client();
        $user_token = $token;
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/user', [
            'headers' => [
                'Authorization' => 'Bearer ' . $user_token,
                'Accept' => 'application/json',
            ],
        ]);
        $data = json_decode($response->getBody(), true);

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = Auth::user();
        $name = $data->name;
        $user_id = $data->id;
        $activity_name = $request->activity_name;
        $activity_amount = $request->activity_amount;
        $time = $request->time;
        $kcal = $request->kcal;
        

        $parameter = [
            'user_id'=>$user_id,
            'activity_name'=>$activity_name,
            'activity_amount'=>$activity_amount,
            'time'=> $time,
            'kcal'=> $kcal,
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/store";
        $response = $client->request('POST', $url, [
            'headers'=>['content-type'=>'application/json'],
            'body'=>json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        
        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            return redirect()->to('fitgo/'.$name)->withErrors($error)->withInput();

        } else{
            return redirect()->to('fitgo/'.$name)->with('success', 'Berhasil memasukan data');
        }

    }


    public function create_weight(Request $request)
    {
        $data = Auth::user();
        $user_id = $data->id;
        $name = $data->name;
        $weight_atm = $request->weight_atm;

        $parameter = [
            'user_id'=>$user_id,
            'weight_atm'=>$weight_atm,
        ];
        
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/store_weight";
        $response = $client->request('POST', $url, [
            'headers'=>['content-type'=>'application/json'],
            'body'=>json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        
        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            return redirect()->to('fitgo/'.$name)->withErrors($error)->withInput();

        } else{
            return redirect()->to('fitgo/'.$name)->with('success', 'Berhasil memasukan data');
        }

    }

    public function destroy_weight(string $id)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/delete_weight/{$id}";
        $response = $client->request('DELETE', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        $data = Auth::user();
        $name = $data->name;
        
        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            return redirect()->to('fitgo/'.$name)->withErrors($error)->withInput();

        } else{
            return redirect()->to('fitgo/'.$name)->with('success', 'Berhasil hapus data');
        }
    }

     public function update_weight(Request $request, string $id)
    {
        $data = Auth::user();
        $user_id = $data->id;
        $weight_atm = $request->weight_atm;

        $parameter = [
            'user_id'=>$user_id,
            'weight_atm'=>$weight_atm,
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/update_weight/{$id}";
        $response = $client->request('PUT', $url, [
            'headers'=>['content-type'=>'application/json'],
            'body'=>json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
    
        $name = $data->name;
        
        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            return redirect()->to('fitgo/'.$name)->withErrors($error)->withInput();

        } else{
            return redirect()->to('fitgo/'.$name)->with('success', 'Berhasil update data');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/delete/{$id}";
        $response = $client->request('DELETE', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        $data = Auth::user();
        $name = $data->name;
        
        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            return redirect()->to('fitgo/'.$name)->withErrors($error)->withInput();

        } else{
            return redirect()->to('fitgo/'.$name)->with('success', 'Berhasil hapus data');
        }
    }
}
