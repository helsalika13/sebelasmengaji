<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class SuperAdminController extends Controller
{
    public function dataguru()
    {
        $teachers = Teacher::all();

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
}
