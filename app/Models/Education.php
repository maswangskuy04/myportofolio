<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
    protected $fillable = [
        'nama_sekolah',
        'jp',
        'tanggal_masuk',
        'tanggal_keluar'
    ];
}
