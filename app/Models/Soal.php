<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getDataSoalGuru($where){
        $data = DB::table('soal')->where($where)->get();
        return $data;
    }

    public static function SimpanSoal($request,$x){
        $data = DB::table('soal')->insert([
            'KelasID' =>$request->id,
            'BAB' =>$request->BAB,
            'no_soal' =>$request->{"no_soal".$x},
            'Soal' =>$request->{"Soal".$x},
            'jawaban1' =>$request->{"jawaban1".$x},
            'jawaban2' =>$request->{"jawaban2".$x},
            'jawaban3' =>$request->{"jawaban3".$x},
            'jawaban4' =>$request->{"jawaban4".$x},
            'Kunci_Jawaban' =>$request->{"Kunci_Jawaban".$x},
            'Alasan' =>$request->{"Alasan".$x},
        ]);
        return $data;
    }

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

    public static function getSoal3(){
        $collection = collect([
            (object)[
                "id" => 1,
                "KelasID" => 1,
                "BAB" => 3,
                "no_soal" => 1,
                "Soal" => "Jenis puisi lama yang terdiri atas 4 baris dengan rima AA-AA, BB-BB, CC-CC, atau DD-DD adalah?",
                "jawaban1" => "Pantun",
                "jawaban2" => "Syair",
                "jawaban3" => "Gurindam",
                "jawaban4" => "Talibun",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Syair adalah puisi lama yang terdiri atas 4 baris dalam setiap baitnya dengan rima yang biasanya a-a-a-a. Setiap baris syair biasanya memiliki makna yang saling berkaitan."
            ],
            (object)[
                "id" => 2,
                "KelasID" => 1,
                "BAB" => 3,
                "no_soal" => 2,
                "Soal" => "Jenis puisi yang bercerita tentang kisah kepahlawanan atau tragedi adalah",
                "jawaban1" => "Balada",
                "jawaban2" => "Soneta ",
                "jawaban3" => "Roman ",
                "jawaban4" => "Lagu ",
                "Kunci_Jawaban" => 1,
                "Alasan" => "Balada adalah jenis puisi naratif yang menceritakan kisah kepahlawanan, tragedi, atau cerita dramatis lainnya. Biasanya ditulis dalam bentuk bait dengan ritme dan rima yang khas.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 3,
                "KelasID" => 1,
                "BAB" => 3,
                "no_soal" => 3,
                "Soal" => "Jenis puisi lama yang terdiri atas 2 baris atau lebih dengan rima A-A, B-B, C-C, dst. adalah",
                "jawaban1" => "Syair ",
                "jawaban2" => "Talibun ",
                "jawaban3" => "Gurindam ",
                "jawaban4" => "Masnawi  ",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Gurindam adalah puisi lama yang terdiri dari dua baris dalam setiap baitnya dengan rima yang bersajak sama (A-A, B-B, C-C, dan seterusnya). Setiap baitnya mengandung nasihat atau petuah.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 4,
                "KelasID" => 1,
                "BAB" => 3,
                "no_soal" => 4,
                "Soal" => " Jenis puisi yang terdiri atas 14 baris dengan rima tertentu adalah:",
                "jawaban1" => "Balada ",
                "jawaban2" => "Soneta ",
                "jawaban3" => "Roman",
                "jawaban4" => "Lagu",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Soneta adalah jenis puisi yang terdiri dari 14 baris dengan pola rima tertentu. Biasanya dibagi menjadi dua bagian: oktaf (8 baris) dan sestet (6 baris), dengan pola rima yang beragam seperti abba-abba-cdc-dcd atau abab-cdcd-efef-gg.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 5,
                "KelasID" => 1,
                "BAB" => 3,
                "no_soal" => 5,
                "Soal" => "Jenis puisi lama yang terdiri atas 5 baris dengan rima AA-ABA atau AB-ABB adalah",
                "jawaban1" => "Pantun",
                "jawaban2" => "Syair",
                "jawaban3" => "Talibun",
                "jawaban4" => "Masnawi",
                "Kunci_Jawaban" => 4,
                "Alasan" => "Masnawi adalah puisi naratif yang terdiri dari bait-bait yang biasanya berisi 5 baris dengan pola rima AA-ABA atau AB-ABB. Puisi ini sering digunakan dalam kesusastraan Persia dan Melayu untuk menyampaikan cerita panjang atau epos.",
                "created_at" => NULL,
                "updated_at" => NULL
            ]
        ]);

        $array = $collection->toArray();

        return $array;

    }

    public static function getSoal4(){
        $collection = collect([
            (object)[
                "id" => 1,
                "KelasID" => 1,
                "BAB" => 4,
                "no_soal" => 1,
                "Soal" => "Apa yang dimaksud dengan tema dalam unsur puisi?",
                "jawaban1" => "Pilihan kata yang digunakan penyair",
                "jawaban2" => "Inti atau pokok bahasan puis",
                "jawaban3" => "Gambaran yang ditangkap panca indera",
                "jawaban4" => "Suasana perasaan yang ingin disampaikan penyair",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Tema adalah inti atau pokok bahasan yang ingin disampaikan oleh penyair melalui puisinya. Tema menggambarkan ide utama atau pesan yang mendasari seluruh puisi."
            ],
            (object)[
                "id" => 2,
                "KelasID" => 1,
                "BAB" => 4,
                "no_soal" => 2,
                "Soal" => "Unsur puisi manakah yang menggambarkan pilihan kata yang digunakan oleh penyair?",
                "jawaban1" => "Imaji",
                "jawaban2" => "Majas ",
                "jawaban3" => "Diksi ",
                "jawaban4" => "Nada ",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Diksi adalah pilihan kata yang digunakan oleh penyair dalam puisinya. Pemilihan kata ini sangat penting untuk menyampaikan makna, suasana, dan nada yang diinginkan.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 3,
                "KelasID" => 1,
                "BAB" => 4,
                "no_soal" => 3,
                "Soal" => "Apa yang dimaksud dengan rima dalam puisi?",
                "jawaban1" => "Persamaan bunyi di akhir baris puisi ",
                "jawaban2" => "Alunan bunyi yang dihasilkan dari susunan kata dalam puisi ",
                "jawaban3" => "Baris dalam puisi ",
                "jawaban4" => "Sekelompok baris dalam puisi  ",
                "Kunci_Jawaban" => 1,
                "Alasan" => "Rima adalah persamaan bunyi yang terdapat di akhir baris puisi. Rima dapat memberikan ritme dan musikalitas pada puisi, serta memperindah bunyi keseluruhan puisi.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 4,
                "KelasID" => 1,
                "BAB" => 4,
                "no_soal" => 4,
                "Soal" => "Bagaimana majas digunakan dalam puisi?",
                "jawaban1" => "Untuk menyampaikan pesan atau pelajaran ",
                "jawaban2" => "Untuk menggambarkan suasana perasaan ",
                "jawaban3" => "Untuk memperindah makna dengan bahasa kiasan",
                "jawaban4" => "Untuk menciptakan alunan bunyi yang harmonis",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Majas adalah penggunaan bahasa kiasan atau figuratif untuk memperindah dan memperkuat makna dalam puisi. Majas membantu penyair menyampaikan perasaan, gambaran, atau pesan dengan cara yang lebih kreatif dan menarik.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 5,
                "KelasID" => 1,
                "BAB" => 4,
                "no_soal" => 5,
                "Soal" => "Apa yang dimaksud dengan amanat dalam puisi?",
                "jawaban1" => "Tema atau pokok bahasan puisi",
                "jawaban2" => "Pesan atau pelajaran yang ingin disampaikan penyair",
                "jawaban3" => "Suasana perasaan yang ingin disampaikan penyair",
                "jawaban4" => "Pilihan kata yang digunakan penyair",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Amanat adalah pesan atau pelajaran yang ingin disampaikan oleh penyair melalui puisinya. Amanat biasanya merupakan nilai-nilai moral, etika, atau nasihat yang dapat diambil oleh pembaca dari puisi tersebut.",
                "created_at" => NULL,
                "updated_at" => NULL
            ]
        ]);

        $array = $collection->toArray();

        return $array;

    }

    public static function getSoal5(){
        $collection = collect([
            (object)[
                "id" => 1,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 1,
                "Soal" => "Apa definisi puisi menurut paragraf di atas?",
                "jawaban1" => "Cara manusia mengekspresikan diri mereka dengan kata-kata yang penuh makna dan emosi",
                "jawaban2" => "Ungkapan kehidupan yang unik melalui prosa.",
                "jawaban3" => "Penggunaan bahasa yang kompleks dan sulit dipahami.",
                "jawaban4" => "Cara manusia berbagi cerita dan kebijaksanaan melalui tulisan panjang.",
                "Kunci_Jawaban" => 1,
                "Alasan" => "Definisi puisi yang umum adalah cara manusia mengekspresikan diri dengan kata-kata yang penuh makna dan emosi."
            ],
            (object)[
                "id" => 2,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 2,
                "Soal" => "Apa yang dimaksud dengan sejarah puisi?",
                "jawaban1" => "Cerita tentang bagaimana manusia menyanyi dan menari",
                "jawaban2" => "Evolusi bahasa dalam komunikasi sehari-hari. ",
                "jawaban3" => "Cerita tentang bagaimana manusia berbagi cerita, impian, dan kebijaksanaan melalui kata-kata yang terpilih dengan hati-hati ",
                "jawaban4" => "Perkembangan teknologi dalam menulis. ",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Sejarah puisi mencakup perkembangan bagaimana manusia menggunakan kata-kata terpilih untuk berbagi cerita, impian, dan kebijaksanaan.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 3,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 3,
                "Soal" => "Apa fungsi utama puisi menurut teks di atas?",
                "jawaban1" => "Mengajarkan ilmu pengetahuan. ",
                "jawaban2" => "Menyampaikan informasi terkini. ",
                "jawaban3" => "Menceritakan kisah-kisah lucu. ",
                "jawaban4" => "Menghibur, menginspirasi, atau mengubah kita melalui kekuatan kata-kata.  ",
                "Kunci_Jawaban" => 4,
                "Alasan" => "Fungsi utama puisi adalah menghibur, menginspirasi, atau mengubah melalui kekuatan kata-kata yang penuh makna.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 4,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 4,
                "Soal" => "Ciri-ciri puisi berikut ini benar, kecuali:",
                "jawaban1" => "Berbentuk bait-bait. ",
                "jawaban2" => "Menggunakan diksi yang indah. ",
                "jawaban3" => "Tidak memiliki irama dan rima",
                "jawaban4" => "Memiliki makna yang mendalam.",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Puisi sering kali memiliki irama dan rima yang khas. Ciri ini justru salah karena banyak puisi yang memanfaatkan irama dan rima untuk memperkuat makna dan keindahan.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 5,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 5,
                "Soal" => "Jenis puisi lama yang terdiri atas 4 baris dengan rima AA-AA disebut:",
                "jawaban1" => "Pantun",
                "jawaban2" => "Syair",
                "jawaban3" => "Gurindam",
                "jawaban4" => "Talibun",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Syair adalah puisi lama yang terdiri dari 4 baris dengan rima yang sama pada setiap barisnya (a-a-a-a).",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 6,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 6,
                "Soal" => "Puisi modern yang terdiri atas 14 baris dengan rima tertentu adalah:",
                "jawaban1" => "Balada",
                "jawaban2" => "Soneta",
                "jawaban3" => "Roman",
                "jawaban4" => "Lagu",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Soneta adalah bentuk puisi yang terdiri dari 14 baris dengan pola rima tertentu, seperti abab-cdcd-efef-gg atau abba-abba-cdc-dcd.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 7,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 7,
                "Soal" => "Unsur puisi yang merupakan pilihan kata yang digunakan penyair disebut:",
                "jawaban1" => "Tema",
                "jawaban2" => "Diksi",
                "jawaban3" => "Imaji",
                "jawaban4" => "Majas",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Diksi adalah pilihan kata yang digunakan oleh penyair dalam puisinya untuk menyampaikan makna dan suasana.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 8,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 8,
                "Soal" => "Apa yang dimaksud dengan rima dalam puisi?",
                "jawaban1" => "Inti atau pokok bahasan puisi.",
                "jawaban2" => "Gambaran yang ditangkap panca indera",
                "jawaban3" => "Persamaan bunyi di akhir baris puisi",
                "jawaban4" => "Suasana perasaan yang ingin disampaikan penyair",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Rima adalah persamaan bunyi yang terdapat di akhir baris puisi, yang memberikan ritme dan keindahan bunyi pada puisi.",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 9,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 9,
                "Soal" => "Puisi yang terdiri dari 2 baris atau lebih dengan rima A-A disebut:",
                "jawaban1" => "Pantun",
                "jawaban2" => "Syair",
                "jawaban3" => "Gurindam",
                "jawaban4" => "Talibun",
                "Kunci_Jawaban" => 3,
                "Alasan" => "Gurindam adalah puisi lama yang terdiri dari dua baris dalam setiap baitnya dengan rima yang bersajak sama (A-A, B-B, C-C, dan seterusnya).",
                "created_at" => NULL,
                "updated_at" => NULL
            ],
            (object)[
                "id" => 10,
                "KelasID" => 1,
                "BAB" => 5,
                "no_soal" => 10,
                "Soal" => "Apa yang ingin disampaikan penyair melalui bait dan baris puisi?",
                "jawaban1" => "Tema",
                "jawaban2" => "Amanat",
                "jawaban3" => "Imaji",
                "jawaban4" => "Irama",
                "Kunci_Jawaban" => 2,
                "Alasan" => "Amanat adalah pesan atau pelajaran yang ingin disampaikan oleh penyair melalui bait dan baris dalam puisinya. Amanat biasanya mengandung nilai-nilai moral atau etika yang dapat diambil oleh pembaca.",
                "created_at" => NULL,
                "updated_at" => NULL
            ]
        ]);

        $array = $collection->toArray();

        return $array;

    }

    public static function getSoal($id,$bab){
        $data = DB::table('soal')->where(['KelasID'=>$id,'BAB'=>$bab])->get();
        return $data;
    }
}
