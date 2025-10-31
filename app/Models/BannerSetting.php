<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BannerSetting extends Model
{
    protected $table = 'Banner_settings';
    protected $fillable = [
        'title',
        'subtitle',
        'desc',
        'image',
        'title_chosen1',
        'desc_chosen1',
        'title_chosen2',
        'desc_chosen2',
        'title_chosen3',
        'desc_chosen3',
        'title_chosen4',
        'desc_chosen4',
    ];
}
