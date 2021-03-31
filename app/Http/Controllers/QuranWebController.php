<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quran;

class QuranWebController extends Controller
{
    public function quran()
    {
        $qur = Quran::where('no_surat', 1)->get();
        $quran = json_decode(json_encode($qur));

        return view('quran', compact('quran'));
    }
}
