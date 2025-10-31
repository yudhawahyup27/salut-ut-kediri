<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile_setting extends Model
{
        protected $fillable = [
        'email',
        'logo',
        'whatsapp',
        'text_wa',
        'alamat',
        'instagram',
        'jurusan',
        'mahasiswa',
        'tahun_berdiri',
        'link_daftar',
    ];
}
