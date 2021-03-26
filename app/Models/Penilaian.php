<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';

    protected $fillable = [
        'feedback_id',
        'progress_id'
    ];

    public function feedback()
    {
        return $this->belongsTo('App\Models\Feedback');
    }

    public function progress()
    {
        return $this->belongsTo('App\Models\Progress');
    }
}
