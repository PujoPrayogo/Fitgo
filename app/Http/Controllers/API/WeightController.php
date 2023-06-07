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
    public function index($id)
    {
        $data = user_weight_overtime::where('user_id', $id)->get();
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

        $data_weight = new user_weight_overtime();

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

        $data_weight->weight_atm = $request->weight_atm;
        $data_weight->user_id = $request->user_id;

        $post =  $data_weight->save();

        return response()->json([
            'status' => true,
            'massage'=> 'sukses memasukkan data'
        ]);
    
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
        $data_weight = user_weight_overtime::find($id);

        if(empty($data_weight)){
            return response()->json([
                'status'=>false,
                'massage'=>'data tidak ditemukan'
            ]);
        }

        $rules = [
            'weight_atm'=> "required",
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                "status"=>false,
                'massage'=>'gagal update data',
                'data'=> $validator->errors()
            ], 400);
        }

        $data_weight->weight_atm = $request->weight_atm;
        $data_weight->user_id = $request->user_id;
       
        $post = $data_weight->save();

        return response()->json([
            'status' => true,
            'massage'=> 'sukses update data'
        ]);
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
