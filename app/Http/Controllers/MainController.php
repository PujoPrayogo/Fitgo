<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
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
        $Kcal = 1000;
        return view("front/dashboard-main", compact('workout', 'Kcal'));
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
