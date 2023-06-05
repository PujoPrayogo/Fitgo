<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\daily_activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RecentActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $data_activity = new daily_activities();

        $rules = [
            'activity_name'=> "required",
            'activity_amount'=> "required",
            'time'=> "required",
            'kcal'=> "required",
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                "status"=>false,
                'massage'=>'gagal memasukan data',
                'data'=> $validator->errors()
            ]);
        }
        
        $data_activity -> user_id = $request->user_id;
        $data_activity -> activity_name = $request->activity_name;
        $data_activity -> activity_amount = $request->activity_amount;
        $data_activity -> time = $request->time;
        $data_activity -> kcal = $request->kcal;
        $post =  $data_activity->save();

        return response()->json([
            'status' => true,
            'massage'=> 'sukses memasukkan data',

        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        $data_activity = daily_activities::find($id);

        if(empty($data_activity)){
            return response()->json([
                'status'=>false,
                'massage'=>'data tidak ditemukan'
            ]);
        }
        $post = $data_activity->delete();
        
        return response()->json([
            'status' => true,
            'massage'=> 'sukses delete data'
        ]);
    }
}
