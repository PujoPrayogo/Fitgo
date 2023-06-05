<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = User::find($id);
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_user = User::find($id);

        if(empty($data_user)){
            return response()->json([
                'status'=>false,
                'massage'=>'data tidak ditemukan'
            ]);
        }

        $rules = [
            
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                "status"=>false,
                'massage'=>'gagal update data',
                'data'=> $validator->errors()
            ], 400);
        }

        $data_user->name = $request->name;
        $data_user->email = $request->email;
        $data_user->bodyweight = $request->bodyweight;
        $data_user->height= $request->height;
        $data_user->age= $request->age;
        $data_user->id = $request->id;
       
        $post = $data_user->save();

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
        //
    }
}
