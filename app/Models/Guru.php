<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Guru extends Model
{
    public static function getDataGuru(){
        $data = DB::table('users')->where('id',Auth::user()->id)->get();
        return $data;
    }
}
