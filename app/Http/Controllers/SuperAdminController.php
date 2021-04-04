<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Classes;
use App\Models\User;

class SuperAdminController extends Controller
{

    public function index()
    {
        return view('layoutsSadmin.dashboard');
    }

    public function dataguru()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->get();

        return view('sadmin.dataguru', compact('teachers'));
    }

    public function createguru()
    {
        return view('sadmin.addguru');
    }

    public function storeguru(Request $request)
    {
        $request->validate([
            'nip'       => 'required',
            'name'      => 'required',
            'contact'   => 'required',
        ]);

        Teacher::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address
        ]);

        return redirect()->route('dataguru');
    }

    public function editguru($id)
    {
        $teacher = Teacher::where('id', $id)->get();
        return view('sadmin.editguru', compact('teacher'));
    }

    public function updateguru(Request $request, $id)
    {
        $request->validate([
            'nip'       => 'required',
            'name'      => 'required',
            'contact'   => 'required',
        ]);

        Teacher::find($id)->update([
            'nip'       => $request->nip,
            'name'      => $request->name,
            'address'   => $request->address,
            'contact'   => $request->contact
        ]);

        return redirect()->route('dataguru');
    }

    public function deleteguru($id)
    {
        $teacher =  Teacher::find($id);
        $teacher->delete();

        return redirect()->route('dataguru');
    }

    public function datakelas()
    {
        $kelas = Classes::select('classes.id', 'nis', 'class', 'sie_rohani', 'classes.contact as kelasemail', 'teachers.name')
            ->join('teachers', 'teachers.id', '=', 'classes.teacher_id')->orderBy('id', 'DESC')->get();

        return view('sadmin.datakelas', compact('kelas'));
    }

    public function createkelas()
    {
        $teachers = Teacher::all();
        return view('sadmin.addkelas', compact('teachers'));
    }

    public function storekelas(Request $request)
    {
        $request->validate([
            'class'       => 'required',
            'sie_rohani'      => 'required',
            'nis' => 'required'
        ]);

        Classes::create([
            'nis' => $request->nis,
            'class' => $request->class,
            'sie_rohani' => $request->sie_rohani,
            'contact' => $request->contact,
            'teacher_id' => $request->teacher_id
        ]);

        return redirect()->route('datakelas');
    }

    public function editkelas($id)
    {
        $teachers = Teacher::all();
        $kelas = Classes::where('classes.id', $id)->select('classes.*', 'teachers.name', 'teachers.id as teacher_id')
            ->join('teachers', 'teachers.id', '=', 'classes.teacher_id')->get();

        return view('sadmin.editkelas', compact('teachers', 'kelas'));
    }

    public function updatekelas(Request $request, $id)
    {
        $request->validate([
            'class'       => 'required',
            'sie_rohani'      => 'required',
            'nis' => 'required'
        ]);

        Classes::where('id', $id)->update([
            'nis' => $request->nis,
            'class' => $request->class,
            'sie_rohani' => $request->sie_rohani,
            'contact' => $request->contact,
            'teacher_id' => $request->teacher_id
        ]);

        return redirect()->route('datakelas');
    }

    public function deletekelas($id)
    {
        $teacher =  Classes::find($id);
        $teacher->delete();

        return redirect()->route('datakelas');
    }
}
