<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    protected $table = 'Alumni';
    protected $fillable = [
        'nama',
        'status',
        'jurusan',
        'tahun_lulus',
        'profesi',
        'slogan',
        'foto',
    ];
}
