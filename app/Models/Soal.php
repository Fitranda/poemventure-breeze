<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
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

    public static function getSoal1(){
        $collection = collect([
            (object)[
                "id" => 1,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 1,
                "Soal" => " Apa yang dimaksud dengan puisi?",
                "jawaban1" => "Cara manusia mengekspresikan diri dengan kata-kata yang penuh makna dan emosi",
                "jawaban2" => "Bentuk prosa yang digunakan untuk bercerita",
                "jawaban3" => "Karya tulis yang berisi fakta dan data ilmiah",
                "jawaban4" => " Metode pengajaran di sekolah",
                "Kunci_Jawaban" => 1,
                "Alasan" => "Puisi adalah bentuk ekspresi artistik yang menggunakan bahasa secara kreatif dan penuh emosi untuk menyampaikan perasaan, pikiran, dan pengalaman penulis. Kata-kata dalam puisi sering kali dipilih dengan hati-hati untuk menciptakan makna yang mendalam dan resonansi emosional"
            ],
            (object)[
                "id" => 2,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 2,
                "Soal" => "Apa fungsi dari perulangan kata atau frasa dalam sebuah puisi?",
                "jawaban1" => "Teknologi dan kemajuan manusia",
                "jawaban2" => "Berbagai pengalaman manusia seperti kegembiraan, kesedihan, cinta, dan kehilangan",
                "jawaban3" => "Perkembangan politik dan ekonomi",
                "jawaban4" => "Sejarah dan geografi dunia",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Puisi sering mencerminkan pengalaman universal manusia, seperti perasaan gembira, sedih, cinta, dan kehilangan. Tema-tema ini bersifat abadi dan tetap relevan dari zaman kuno hingga saat ini, menunjukkan bagaimana puisi dapat menangkap esensi pengalaman manusia yang mendalam",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 3,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 3,
                "Soal" => "Bagaimana puisi menghubungkan penulis atau pembaca dengan kemanusiaan?",
                "jawaban1" => "Dengan memberikan informasi dan data yang akurat",
                "jawaban2" => "Dengan menghibur penonton melalui pertunjukan",
                "jawaban3" => "Dengan terhubung dengan aspek-aspek yang paling mendalam dari kemanusiaan kita",
                "jawaban4" => "Dengan mengajarkan keterampilan teknis",
                "Kunci_Jawaban" => 3,
                "Alasan" => " Puisi memungkinkan penulis dan pembaca untuk berhubungan dengan perasaan, emosi, dan pengalaman manusia yang mendalam. Melalui puisi, orang dapat merasakan dan memahami perasaan orang lain, yang menciptakan ikatan emosional dan pemahaman yang lebih dalam tentang kemanusiaan",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 4,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 4,
                "Soal" => "Apa yang diceritakan dalam sejarah puisi?",
                "jawaban1" => "Perkembangan teknologi dan inovasi manusia",
                "jawaban2" => "Cara manusia berbagi cerita, impian, dan kebijaksanaan melalui kata-kata",
                "jawaban3" => "Evolusi bahasa dari masa ke masa",
                "jawaban4" => "Pengaruh puisi terhadap ekonomi global",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Sejarah puisi menunjukkan bagaimana manusia telah menggunakan puisi sebagai sarana untuk berbagi cerita, impian, dan kebijaksanaan. Puisi sering berfungsi sebagai medium untuk komunikasi yang mendalam dan introspektif, memungkinkan penulis untuk menyampaikan pesan yang mendalam kepada pembaca",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 5,
                "KelasID" => 1,
                "BAB" => 1,
                "no_soal" => 5,
                "Soal" => "Apa fungsi puisi menurut paragraf tersebut?",
                "jawaban1" => "Menyampaikan data ilmiah dengan cara yang menarik",
                "jawaban2" => "Menghibur, menginspirasi, atau mengubah pembaca",
                "jawaban3" => "Mengajarkan bahasa dan keterampilan menulis",
                "jawaban4" => "Membantu mengingat fakta-fakta sejarah",
                "Kunci_Jawaban" => 2,
                "Alasan" => " Puisi memiliki fungsi yang beragam, termasuk menghibur, menginspirasi, atau bahkan mengubah pembaca. Dengan menggunakan bahasa yang indah dan penuh makna, puisi dapat menyentuh hati dan pikiran pembaca, memberikan hiburan, inspirasi, atau perubahan perspektif yang mendalam",
                "created_at" => NULL,
                "updated_at" => NULL
            ]
        ]);

        $array = $collection->toArray();

        return $array;

    }

    public static function getSoal2(){
        $collection = collect([
            (object)[
                "id" => 1,
                "KelasID" => 1,
                "BAB" => 2,
                "no_soal" => 1,
                "Soal" => " Puisi tersusun atas apa?",
                "jawaban1" => "Paragraf",
                "jawaban2" => "Bait-bait",
                "jawaban3" => "Kalimat ",
                "jawaban4" => " Bab",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Puisi adalah bentuk karya sastra yang terdiri dari bait-bait. Setiap bait biasanya terdiri dari beberapa baris yang membentuk satu kesatuan makna dan emosi."
            ],
            (object)[
                "id" => 2,
                "KelasID" => 1,
                "BAB" => 2,
                "no_soal" => 2,
                "Soal" => "Apa yang digunakan penyair untuk memperkuat makna dan membangkitkan imajinasi pembaca? ",
                "jawaban1" => "Kata-kata sederhana ",
                "jawaban2" => "Gaya bahasa",
                "jawaban3" => "Diksi yang indah",
                "jawaban4" => "Narasi",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Penyair memilih kata-kata yang indah dan kiasan untuk memperkuat makna dan membangkitkan imajinasi pembaca",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 3,
                "KelasID" => 1,
                "BAB" => 2,
                "no_soal" => 3,
                "Soal" => "Puisi memiliki apa yang teratur, menghasilkan bunyi yang merdu dan mudah diingat?",
                "jawaban1" => "Tema dan pesan",
                "jawaban2" => "Irama dan rima",
                "jawaban3" => "Gaya dan nada ",
                "jawaban4" => "Struktur dan format ",
                "Kunci_Jawaban" => 2,
                "Alasan" => " Irama dan rima adalah elemen penting dalam puisi yang memberikan struktur teratur dan ritme, sehingga membuat puisi terdengar merdu dan mudah diingat.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 4,
                "KelasID" => 1,
                "BAB" => 2,
                "no_soal" => 4,
                "Soal" => "Pesan dan makna yang disampaikan oleh puisi umumnya bagaimana?",
                "jawaban1" => "Sederhana",
                "jawaban2" => "Biasa saja",
                "jawaban3" => "Mendalam",
                "jawaban4" => "Tidak jelas",
                "Kunci_Jawaban" => 3,
                "Alasan" => " Puisi sering kali menyampaikan pesan dan makna yang mendalam, menggunakan bahasa yang padat dan penuh nuansa.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 5,
                "KelasID" => 1,
                "BAB" => 2,
                "no_soal" => 5,
                "Soal" => "Berapa baris biasanya terdapat dalam satu bait puisi?",
                "jawaban1" => "Satu baris",
                "jawaban2" => "Dua baris",
                "jawaban3" => "Tiga baris",
                "jawaban4" => "Beberapa baris",
                "Kunci_Jawaban" => 4,
                "Alasan" => "  Satu bait dalam puisi biasanya terdiri dari beberapa baris, tidak terbatas pada satu, dua, atau tiga baris, dan jumlahnya bervariasi tergantung pada bentuk puisi.",
                "created_at" => NULL,
                "updated_at" => NULL
            ]
        ]);

        $array = $collection->toArray();

        return $array;

    }
}
