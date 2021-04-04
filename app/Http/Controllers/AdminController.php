<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Progress;
use App\Models\Penilaian;
use App\Models\Feedback;
use App\Models\Classes;

use App\Exports\PenilaianExport;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    public function index()
    {
        return view('layoutsadmin.home');
    }
    public function progress()
    {
        $progress = Progress::select('classes.*', 'progresses.*', 'progresses.id as progressid')->join('classes', 'classes.id', '=', 'progresses.class_id')->orderBy('progresses.id', 'DESC')->get();

        return view('admin.progress', compact('progress'));
    }

    public function feedback($id)
    {
        $progress = Progress::select('classes.*', 'progresses.*', 'progresses.id as progressid')->where('progresses.id', $id)->join('classes', 'classes.id', '=', 'progresses.class_id')->get();
        $feedback = Feedback::all();

        return view('admin.addfeedback', compact('progress', 'feedback'));
    }

    public function createfeedback(Request $request)
    {
        Penilaian::create([
            'progress_id' => $request->progressid,
            'feedback_id' => $request->feedback_id
        ]);

        return redirect()->route('penilaian');
    }

    public function penilaian()
    {
        $penilaian = Penilaian::select('classes.class', 'feedback.*', 'penilaian.*', 'progresses.*', 'progresses.id as progressid', 'feedback.id as feedbackid')
            ->join('feedback', 'feedback.id', '=', 'penilaian.feedback_id')
            ->join('progresses', 'progresses.id', '=', 'penilaian.progress_id')
            ->join('classes', 'classes.id', '=', 'progresses.class_id')->orderBy('penilaian.id', 'DESC')->get();

        return view('admin.penilaian', compact('penilaian'));
    }

    public function exportexcel()
    {
        return Excel::download(new PenilaianExport, 'penilaian.xlsx');
    }

    public function getkelas()
    {
        $kelas = Classes::select('classes.id', 'nis', 'class', 'sie_rohani', 'classes.contact as kelasemail', 'teachers.name')
            ->join('teachers', 'teachers.id', '=', 'classes.teacher_id')->where('teachers.name', Auth::user()->name)->orderBy('id', 'DESC')->get();

        return view('admin.getkelas', compact('kelas'));
    }

    public function progresskelas($id)
    {
        $progress = Progress::select('classes.*', 'progresses.*', 'progresses.id as progressid')->join('classes', 'classes.id', '=', 'progresses.class_id')->where('class_id', $id)->orderBy('progresses.id', 'DESC')->get();

        return view('admin.progresskelas', compact('progress'));
    }
}
