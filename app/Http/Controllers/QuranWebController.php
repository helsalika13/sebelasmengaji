<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quran;

class QuranWebController extends Controller
{
    public function quran()
    {
        $qur = Quran::all();
        $quran = json_decode(json_encode($qur));

        return view('quran', compact('quran'));
    }

    public function quransurat($id)
    {
        $qur = Quran::where('no_surat', $id)->get();
        $quran = json_decode(json_encode($qur));

        return view('quransurat', compact('quran'));
    }
}
