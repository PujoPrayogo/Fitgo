<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $user = Auth::user();
        $id = $user->id;
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/profile/{$id}";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];

        return view('front/dashboard-profile', ['data'=> $data], ['id'=>$id]);

       
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
        $data = Auth::user();
        $user_id = $data->id;

        $name = $request->username;
        $height = $request->height;
        $bodyweight = $request->weight;
        $age = $request->age;

        $parameter = [
            'id'=>$user_id,
            'name'=>$name,
            'height'=> $height,
            'bodyweight'=> $bodyweight,
            'age'=> $age,
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/update_profile/{$id}";
        $response = $client->request('PUT', $url, [
            'headers'=>['content-type'=>'application/json'],
            'body'=>json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
    
        $id = $data->id;
        
        if($contentArray["status"] != true) {
            $error = $contentArray['massage'];
            // return redirect()->to('fitgo/profile/'.$id)->withErrors($error)->withInput();
            return "gagal update";
        } else{
            return redirect()->to('fitgo/profile/'.$id)->with('success', 'Berhasil update data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
