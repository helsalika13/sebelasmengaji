<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'class',
        'sie_rohani',
        'teacher_id',
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function kelas()
    {
        return $this->hasMany(Progress::class);
    }
}
