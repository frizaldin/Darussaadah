<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    //hubungkan ke table gallery
    protected $table = 'gallery';

    protected $fillable = [
        'judul',
        'subjudul',
        'file',
    ];
}
