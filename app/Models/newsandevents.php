<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsAndEvents extends Model
{
    public $table = 'news_and_events';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'category',
        'image',
        'category_event',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->title);
        });
    }
}
