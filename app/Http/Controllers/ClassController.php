<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Teacher;

class ClassController extends Controller
{
    public function index()
    {
        $user  = auth('api')->user();
        if ($user->role == 'superadmin') {
            $class = Classes::with('teacher')->OrderBy("id", "ASC")->paginate(10);;
            return response()->json([
                'success' => true,
                'data' => $class
            ], 201);
        } else if ($user->role == 'admin') {
            $teacherid = Teacher::where('nip', $user->nip_nis)->first();
            $class = Classes::where('teacher_id', $teacherid->id)->with('teacher')->OrderBy("id", "ASC")->paginate(10);
            return response()->json([
                'success' => true,
                'data' => $class
            ], 201);
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'class'       => 'required',
            'sie_rohani'  => 'required',
            'teacher_id'  => 'required',
        ]);

        $input = $request->all();
        $class = Classes::create($input);

        if ($class) {
            return response()->json([
                'success' => true,
                'message' => 'Data kelas Berhasil Ditambah!',
                'data' => $input
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas Gagal Ditambah!',
            ], 400);
        }
    }

    public function show($id)
    {
        return response()->json(Classes::find($id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'class'       => 'required',
            'sie_rohani'  => 'required',
            'teacher_id'  => 'required',
        ]);

        $class = Classes::where('id', $id)->update([
            'class'       => $request->class,
            'sie_rohani'  => $request->sie_rohani,
            'teacher_id'  => $request->teacher_id
        ]);

        if ($class) {
            return response()->json([
                'success' => true,
                'message' => 'Data kelas berhasil diubah!',
                'id' => $id
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas gagal diubah!',
            ], 400);
        }
    }

    public function delete($id)
    {
        $class =  Classes::find($id);

        if (!$class) {
            $data = [
                "message" => "id not found",
            ];
        } else {
            $class->delete();
            $data = [
                "message"  => "success deleted",
                "id"       => $id,
            ];
        }

        return response()->json($data, 200);
    }
}
