<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user_weight_overtime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $data = user_weight_overtime::where('user_id', $user->id)->get();
        return response()->json([
            "status"=>true,
            "massage"=>"data ditemukan",
            "data"=>$data
        ],200);

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
        
   
        $user = Auth::user();
        $data = new user_weight_overtime;

        $rules = [
            'weight_atm'=> "required",
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                "status"=>false,
                'massage'=>'gagal memasukan data',
                'data'=> $validator->errors()
            ]);
        }


        $data->user_id = $user->id;
        $data->weight_atm = $request->weight_atm;

        $post = $data->save();

        return response()->json([
            'status' => true,
            'massage'=> 'sukses memasukkan data'
        ]);
    }catch(Exception $e){
        return $user->id;
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
        $data = user_weight_overtime::find($id);

        if(empty($data)){
            return response()->json([
                'status'=>false,
                'massage'=>'data tidak ditemukan'
            ], 404);
        }

        $post = $data->delete();

        return response()->json([
            'status' => true,
            'massage'=> 'sukses delete data'
        ]);
    }
}
