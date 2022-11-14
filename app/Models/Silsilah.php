<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silsilah extends Model
{
    use HasFactory;
    protected $table = 'keturunan';
    protected $fillable = [
        'id',
        'nama',
        'nama_bapak',
        'nama_anak',
        'jenis_kelamin',
        'jenis_kelamin_anak',
    ];
}
