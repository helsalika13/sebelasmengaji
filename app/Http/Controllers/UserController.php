<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Classes;

class UserController extends Controller
{
    public function profile()
    {
        $user  = auth('api')->user();
        $guruprofile = Teacher::where('contact', $user->email)->first();

        if (!$guruprofile) {
            $userprofile = Classes::where('nis', $user->nip_nis)->first();
            return response()->json([
                'success' => false,
                'message' => 'User ditemukan!',
                'data'    => $userprofile
            ], 400);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'User ditemukan',
                'data' => $guruprofile
            ], 201);
        }
    }
}
