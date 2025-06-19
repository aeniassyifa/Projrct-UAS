<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Service::get();
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
        $data = new service();

        $data->id = $request->id;
        $data->keluhan = $request->keluhan;
        $data->tgl_masuk = $request->tglMasuk;
        $data->tgl_keluar = $request->tglKeluar;

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
        $data = service::where('id','=',$id)->get();
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
        $data = service::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        }
        
        $dataUpdate = service::where('id','=',$id);
        $dataUpdate->update([
            'id'=>$request->id,
            'keluhan'=>$request->keluhan,
            'tgl_masuk'=>$request->tglMasuk,
            'tgl_keluar'=>$request->tglKeluar,
            
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
        $data = service::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        } 

        $data = service::where('id','=',$id);
        $data->delete();

        return response()->json([
            'status'=>true,
            'pesan'=>'Data berhasil disimpan',
        ]);
    }
}
