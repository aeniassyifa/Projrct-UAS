<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\kendaraan;
use Illuminate\Http\Request;

class kendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = kendaraan::get();
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
        $data = new kendaraan();

        $data->id = $request->id;
        $data->no_pol = $request->noPol;
        $data->tahun_kendaraan = $request->tahunKendaraan;
        $data->no_mesin = $request->noMesin;
        $data->no_rangka = $request->noRangka;
        $data->kapasitas_mesin = $request->kapasitasMesin;
        $data->transmisi = $request->transmisi;

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
        $data = kendaraan::where('id','=',$id)->get();
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
        $data = kendaraan::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        }
        
        $dataUpdate = kendaraan::where('id','=',$id);
        $dataUpdate->update([
            'id'=>$request->id,
            'no_pol'=>$request->noPol,
            'tahun_kendaraan'=>$request->tahunKendaraan,
            'no_mesin'=>$request->noMesin,
            'no_rangka'=>$request->noRangka,
            'kapasitas_mesin'=>$request->kapasitasMesin,
            'transmisi'=>$request->transmisi,
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
        $data = kendaraan::where('id','=',$id)->get();
        if(empty($data)) {
            return response()->json([
                'status'=>false,
                'pesan'=>'Data tidak ditemukan',
            ],404);
        } 

        $data = kendaraan::where('id','=',$id);
        $data->delete();

        return response()->json([
            'status'=>true,
            'pesan'=>'Data berhasil disimpan',
        ]);
    }
}
