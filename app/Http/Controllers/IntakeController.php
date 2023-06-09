<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->check()){
        $data = Auth::user();
        $protein = ($data->bodyweight*0.8);
        $bmr = (66.5 + (13.7 * $data->bodyweight) + (5 * $data->height) - (6.8 * $data->age));
        $id = $data->id;

        $data = [
            'name' => $data->name,
            'protein' => $protein,
            'bmr' => $bmr
        ];

        
        return view('front/dashboard-intake', ['data'=> $data])->with('id', $id);
        }
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
