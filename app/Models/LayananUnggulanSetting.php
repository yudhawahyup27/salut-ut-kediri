<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananUnggulanSetting extends Model
{
    use HasFactory;

    // Pastikan nama tabel benar
    protected $table = 'layanan_unggulan_settings';

    // Primary key (default 'id')
    protected $primaryKey = 'id';

    // Auto increment
    public $incrementing = true;

    // Key type
    protected $keyType = 'int';

    // Timestamps
    public $timestamps = true;

    // Fillable fields
    protected $fillable = [
        'icon',
        'title',
        'desc'
    ];

    // Casts
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Hidden fields
    protected $hidden = [];

    // Dates
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    // Untuk debugging - method untuk check koneksi
    public static function testConnection()
    {
        try {
            return self::count();
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    // Scope untuk testing
    public function scopeActive($query)
    {
        return $query->whereNotNull('title');
    }
}
