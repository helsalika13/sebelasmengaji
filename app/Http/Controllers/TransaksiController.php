<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\Classes;

class TransaksiController extends Controller
{
    public function getprogres()
    {
        $user  = auth('api')->user();
        $classid = Classes::where('nis', $user->nip_nis)->first();
        $progres = Progress::where('class_id', $classid->id)->with('classes')->paginate(10);
        return response()->json([
            'success' => true,
            'data' => $progres
        ], 201);
    }

    public function progres(Request $request)
    {
        $user  = auth('api')->user();
        $classid = Classes::where('nis', $user->nip_nis)->first();

        $request->validate([
            'tanggal'   => 'required',
            'ayat_ke'   => 'required',
            'surat_ke'  => 'required',
        ]);

        $progres = Progress::create([
            'tanggal'   => $request->tanggal,
            'ayat_ke'   => $request->ayat_ke,
            'surat_ke'  => $request->surat_ke,
            'class_id'  => $classid->id
        ]);

        if ($progres) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil menyimpan progres',
                'data' => $progres
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan progres',
            ], 400);
        }
    }
}
