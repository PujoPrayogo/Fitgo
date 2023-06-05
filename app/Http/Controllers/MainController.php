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

        return response()->json($data);



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
