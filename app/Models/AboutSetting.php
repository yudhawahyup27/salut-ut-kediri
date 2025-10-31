<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    protected $table = 'about_settings';
    protected $fillable = [
        'title',
        'desc',
        'image',
    ];
    
}
