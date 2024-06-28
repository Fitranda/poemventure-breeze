<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kelas',
        'Nama',
        'Deskripsi',
        'password',
        'GuruID',
        'cekpw',
    ];

    public static function getDataKelasGuru($where){
        $data = DB::table('kelas')->where($where)->get();
        return $data;
    }

    public static function getDataKelasGuruFirst($id){
        $data = DB::table('kelas')->where('id',$id )->first();
        return $data;
    }

    public static function simpankelasguru($params) {
        return self::create($params);
    }

    public static function updateKelasGuru($request){
        $post = Kelas::findOrFail($request->id);

        // Melakukan pembaruan data
        $post->Nama = $request->Nama;
        $post->Deskripsi = $request->Deskripsi;
        if ($request->cekpw == 1) {
            $post->password = Hash::make($request->password);
        }
        $post->save();
    }

    public static function getdatakelassiswa(){
         $data = DB::table('kelas')
                ->leftJoin('kelasdetail', 'kelas.id', '=', 'kelasdetail.KelasID')
                ->where('kelasdetail.SiswaID',Auth::user()->id )
                ->get();
        return $data;
    }

    public static function getKelasKode($kode){
        $kelas = DB::table('kelas')
                ->where('kode_kelas', $kode)
                ->first();

        return $kelas;
    }

    public static function tambahkelassiswa($param){
        Kelasdetail::create($param);
    }
}
