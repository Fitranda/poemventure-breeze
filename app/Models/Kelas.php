<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public static function getdataKelas(){
        $collection = collect([
            (object)[
                "id" => 1,
                "kode_kelas" => "vE6F5yVEbB",
                "Nama" => "Sastra",
                "Deskripsi" => "Sastra puisi",
                "GuruID" => 3,
                "created_at" => "2024-05-05 10:12:06",
                "updated_at" => "2024-05-05 10:12:06",
                "KelasID" => 1,
                "SiswaID" => 4,
                "Nilai" => 0,
                "Darah" => 100,
                "Level" => 0,
            ]
        ]);

        $array = $collection->toArray();
        return $array;
    }

    public static function getSoal(){
        $collection = collect([
            (object)[
                "id" => 1,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 1,
                "Soal" => "Apa yang dimaksud dengan istilah 'metafora' dalam puisi?",
                "jawaban1" => "Perulangan kata-kata",
                "jawaban2" => "Penegasan berulang",
                "jawaban3" => "Perbandingan langsung antara dua hal tanpa menggunakan kata 'seperti' atau 'bagai'",
                "jawaban4" => "Pengulangan bunyi awalan yang sama",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Metafora adalah penggunaan kata atau frasa yang menggambarkan satu hal sebagai hal lain tanpa menggunakan kata 'seperti' atau 'bagai'.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 2,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 2,
                "Soal" => "Apa fungsi dari perulangan kata atau frasa dalam sebuah puisi?",
                "jawaban1" => "Menambah panjang puisi",
                "jawaban2" => "Mengulang tema utama",
                "jawaban3" => "Memperjelas makna",
                "jawaban4" => "Menambah kesan dramatis",
                "Kunci_Jawaban" => 4,
                "Alasan" => "Perulangan kata atau frasa dalam puisi sering digunakan untuk menambah kesan dramatis atau emosional.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 3,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 3,
                "Soal" => "Apa yang dimaksud dengan 'rime scheme' dalam puisi?",
                "jawaban1" => "Urutan kata yang diulang dalam setiap baris",
                "jawaban2" => "Pola yang terbentuk dari pola aksen dalam puisi",
                "jawaban3" => "Pola berulang dari suku kata di akhir baris puisi",
                "jawaban4" => "Perbedaan tata letak kata dalam sebuah puisi",
                "Kunci_Jawaban" => 3,
                "Alasan" => "'Rime scheme' adalah pola berulang dari suku kata di akhir baris puisi, yang menunjukkan pola rim atau rima dalam puisi",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 4,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 4,
                "Soal" => "Apa yang dimaksud dengan 'simile' dalam puisi?",
                "jawaban1" => "Penggunaan kata-kata dengan suara yang serupa",
                "jawaban2" => "Penyajian satu hal sebagai hal lain tanpa menggunakan kata 'seperti' atau 'bagai'",
                "jawaban3" => "Penegasan berulang dari sebuah ide",
                "jawaban4" => "Perbandingan langsung antara dua hal dengan menggunakan kata 'seperti' atau 'bagai'",
                "Kunci_Jawaban" => 4,
                "Alasan" => "'Simile' adalah perbandingan langsung antara dua hal dengan menggunakan kata 'seperti' atau 'bagai'",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 5,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 5,
                "Soal" => "Apa yang dimaksud dengan 'imagery' dalam puisi?",
                "jawaban1" => "Penggunaan kata-kata yang menggambarkan indra penglihatan, pendengaran, penciuman, perasaan, atau rasa",
                "jawaban2" => "Perulangan kata atau frasa untuk efek dramatis",
                "jawaban3" => "Penggunaan kata-kata yang memiliki suara yang serupa",
                "jawaban4" => "Pengulangan bunyi awalan yang sama",
                "Kunci_Jawaban" => 1,
                "Alasan" => "'Imagery' dalam puisi adalah penggunaan kata-kata yang menggambarkan indra penglihatan, pendengaran, penciuman, perasaan, atau rasa, untuk membangkitkan citra mental yang kuat pada pembaca.",
                "created_at" => NULL,
                "updated_at" => NULL
            ]
        ]);

        $array = $collection->toArray();

        return $array;

    }
}
