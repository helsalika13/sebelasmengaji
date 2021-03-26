<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\Classes;
use App\Models\Penilaian;

class TransaksiController extends Controller
{
    public function getprogres()
    {
        $user  = auth('api')->user();
        $classid = Classes::where('nis', $user->nip_nis)->first();
        $progres = Progress::with('kelas')->where('class_id', $classid->id)->paginate(10);
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

    public function getPenilaian()
    {
        $penilaian = Penilaian::with('progress', 'feedback')->get();
        if ($penilaian) {
            return response()->json([
                'success' => true,
                'data' => $penilaian
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan penilaian',
            ], 400);
        }
    }

    public function penilaian(Request $request)
    {
        $penilaian = Penilaian::with('feedback', 'progress')->create([
            'feedback_id'   => $request->feedback_id,
            'progress_id'   => $request->progress_id,
        ]);

        if ($penilaian) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil menyimpan penilaian',
                'data' => $penilaian
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan penilaian',
            ], 400);
        }
    }
}
