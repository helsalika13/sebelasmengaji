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

    public function updateProfile(Request $request)
    {
        $user  = auth('api')->user();

        if ($user->role == 'srohani') {
            $profile = Classes::where('nis', $request->nip_nis)->update([
                'class'         => $request->class,
                'sie_rohani'    => $request->sie_rohani,
                'contact'       => $request->contact
            ]);
            if ($profile) {
                return response()->json([
                    'success'   => true,
                    'message'   => 'User kelas berhasil diubah',
                    'data'      => $profile
                ], 201);
            } else {
                return response()->json([
                    'success'   => false,
                    'message'   => 'User gagal diubah',
                ], 400);
            }
        } else if ($user->role == 'admin') {
            $profile = Teacher::where('nip', $request->nip)->update([
                'name'      => $request->name,
                'address'   => $request->address,
                'contact'   => $request->contact
            ]);
            if ($profile) {
                return response()->json([
                    'success' => true,
                    'message' => 'User guru berhasil diubah',
                    'data' => $profile
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User gagal diubah',
                ], 400);
            }
        }
    }
}
