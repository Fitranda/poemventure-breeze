<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama',
        'Kelas',
        'EXP',
        'HP',
    ];

    public static function getdataProfile(){
        $array =array(
            0 =>
                array(
                    "id" => 1,
                    "Nama" => "Fitranda",
                    "Kelas" => "Kelas 8",
                    "EXP" => 25,
                    "HP" => 5
                )
            );


        return $array;
    }
}
