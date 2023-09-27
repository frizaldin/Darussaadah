<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $fillable = [
        'judul',
        'subjudul',
        'file',
        'deskripsi',
        'umur',
        'wilayah',
        'alamat',
        'email',
        'phone',
        'pekerjaan'
    ];
}
