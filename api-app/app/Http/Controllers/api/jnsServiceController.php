<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\jnsService;
use Illuminate\Http\Request;

class jnsServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = jnsService::get();
        return response()->json([
            'status'=>true,
            'pesan'=>'Data ditemukan',
            'data'=>$data,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new jnsService();

        $data->id = $request->id;
        $data->jns_service = $request->jnsService;
        $data->keterangan = $request->keterangan;

        $post = $data->save();
        return response()->json([
            'status'=>true,
            'pesan'=>'Data berhasil disimpan'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = jnsService::where('id','=',$id)->get();
        if ($data) {
            return response()->json([
                'status'=>true,
                'pesan'=>'Data ditemukan',
                'data'=>$data,
            ],200);
        } else{
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = jnsService::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        }
        
        $dataUpdate = jnsService::where('id','=',$id);
        $dataUpdate->update([
            'id'=>$request->id,
            'jns_service'=>$request->jnsService,
            'keterangan'=>$request->keterangan,
        ]);
        return response()->json([
            'status'=>true,
            'pesan'=>'Data berhasil disimpan',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = jnsService::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        } 

        $data = jnsService::where('id','=',$id);
        $data->delete();

        return response()->json([
            'status'=>true,
            'pesan'=>'Data berhasil disimpan',
        ]);
    }
}
