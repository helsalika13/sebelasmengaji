<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quran;

class QuranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'qurans']]);
    }

    public function index()
    {
        $qurans = Quran::paginate(10);

        return response()->json([
            'success' => true,
            'data' => $qurans
        ], 201);
    }
}
