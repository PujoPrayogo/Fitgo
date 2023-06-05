<?php

namespace App\Http\Controllers;

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
     */
    public function index(Request $request, $token)
    {
        
        $client = new Client();
        $user_token = $token;
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/user', [
            'headers' => [
                'Authorization' => 'Bearer ' . $user_token,
                'Accept' => 'application/json',
            ],
        ]);
        $data = json_decode($response->getBody(), true);

        $id = $data['id'];
        $name = $data['name'];
        $bmr = (66.5 + (13.7 * $data['bodyweight']) + (5 * $data['height']) - (6.8 * $data['age']));
        $water = ($data['bodyweight']*30);
        $protein = ($data['bodyweight']*0.8);
        $workout = $this->workout();
        $bmi = ($data['bodyweight'] / (($data['height']*0.01)*($data['height']*0.01)));
        $ideal_weight = (22/ (($data['height']*0.01)*($data['height']*0.01)));
        if($bmi < 18.5){
            $weight_change = $ideal_weight - $data['bodyweight'];
        }elseif($bmi > 25){
            $weight_change = $data['bodyweight']- $ideal_weight;
        }else{
            $weight_change = 0;
        }

        $data = [
            'name' => $name,
            'bmr' => $bmr,
            'workout' => $workout,
            'protein' => $protein,
            'water' => $water,
            'weight_change' => $weight_change,
        ];


        return view('front/dashboard-main')->with('data', $data);

        // return response()->json( $data);

    }

    public function workout(){
        $today = Carbon::now();
        $workout = '';

        switch ($today->dayOfWeek) {
            case Carbon::MONDAY:
                $workout = 'Back Workout';
                break;
            case Carbon::TUESDAY:
                $workout = 'Chest Workout';
                break;
            case Carbon::WEDNESDAY:
                $workout = 'Leg Workout';
                break;
            case Carbon::THURSDAY:
                $workout = 'Rest';
                break;
            // Tambahkan case lainnya sesuai kebutuhan
            default:
                $workout = 'No workout scheduled';
                break;
    }

        return $workout;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }
}
