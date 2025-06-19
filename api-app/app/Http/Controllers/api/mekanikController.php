<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\mekanik;
use Illuminate\Http\Request;

class mekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = mekanik::get();
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
        $data = new mekanik();

        $data->id = $request->id;
        $data->nm_mekanik = $request->nmMekanik;
        $data->tgl_lahir = $request->tglLahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->noHp;

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
        $data = mekanik::where('id','=',$id)->get();
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
         $data = mekanik::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        }
        
        $dataUpdate = mekanik::where('id','=',$id);
        $dataUpdate->update([
            'id'=>$request->id,
            'nm_mekanik'=>$request->nmMekanik,
            'tgl_lahir'=>$request->tglLahir,
            'alamat'=>$request->alamat,
            'nik'=>$request->nik,
            'no_hp'=>$request->noHp,
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
        $data = mekanik::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        } 

        $data = mekanik::where('id','=',$id);
        $data->delete();

        return response()->json([
            'status'=>true,
            'pesan'=>'Data berhasil disimpan',
        ]);
    }
}
