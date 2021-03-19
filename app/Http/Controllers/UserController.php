<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;

class UserController extends Controller
{
    public function profile()
    {
        $user  = auth('api')->user();
        $profile = Teacher::where('contact', $user->email)->first();

        if (!$profile) {
            return response()->json([
                'success' => false,
                'message' => 'User tidak ditemukan!',
            ], 400);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'User ditemukan',
                'data' => $profile
            ], 201);
        }
    }
}
