<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasdetail extends Model
{
    use HasFactory;
    protected $table = 'kelasdetail';
    protected $fillable = [
        'KelasID',
        'SiswaID',
        'Nilai',
        'Darah',
        'Level',
    ];
}
