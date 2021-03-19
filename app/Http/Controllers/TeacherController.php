<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;
use App\Models\User;

class TeacherController extends Controller
{
    public function index()
    {
        $user  = auth('api')->user();
        $teachers = Teacher::all();
        return response()->json([
            'success'   => true,
            'data'      => $teachers
        ], 201);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nip'       => 'required',
            'name'      => 'required',
            'contact'   => 'required',
        ]);

        $teacher = Teacher::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'contact' => $request->contact
        ]);

        User::create([
            'name' => $request->name,
            'username' => str_replace(' ', '', $request->name),
            'email' => $request->contact,
            'role' => 'admin',
            'password' => Hash::make('admin') //default password
        ]);

        if ($teacher) {
            return response()->json([
                'success' => true,
                'message' => 'Data Guru Berhasil Ditambah!',
                'data' => $teacher
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Guru Gagal Ditambah!',
            ], 400);
        }
    }

    public function show($id)
    {
        return response()->json(Teacher::find($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip'       => 'required',
            'name'      => 'required',
            'contact'   => 'required',
        ]);

        $teacher = Teacher::where('id', $id)->update([
            'nip'       => $request->nip,
            'name'      => $request->name,
            'address'   => $request->address,
            'contact'   => $request->contact
        ]);

        if ($teacher) {
            return response()->json([
                'success' => true,
                'message' => 'Data guru berhasil diubah!',
                'id' => $id
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data guru gagal diubah!',
            ], 400);
        }
    }

    public function delete($id)
    {
        $teacher =  Teacher::find($id);

        if (!$teacher) {
            $data = [
                "message" => "id not found",
            ];
        } else {
            $teacher->delete();
            $data = [
                "message"  => "success deleted",
                "id"       => $id,
            ];
        }

        return response()->json($data, 200);
    }
}
