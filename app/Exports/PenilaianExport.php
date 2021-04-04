<?php

namespace App\Exports;

use App\Models\Penilaian;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenilaianExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Penilaian::select('classes.class', 'progresses.ayat_ke', 'progresses.surat_ke', 'feedback.feedback')
            ->join('feedback', 'feedback.id', '=', 'penilaian.feedback_id')
            ->join('progresses', 'progresses.id', '=', 'penilaian.progress_id')
            ->join('classes', 'classes.id', '=', 'progresses.class_id')->get();
    }
}
