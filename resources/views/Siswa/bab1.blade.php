<x-narasi-layout>
    <div id="latar" class="min-h-screen max-h-screen bg-cover bg-center bg-no-repeat" style="
             background-image: url('{{ url('img/HutanA.jpg') }}');
        ">
        <main id="main" class="p-10">
            <div id="materi" class="w-[80%] m-auto p-4 md:p-6 hidden">
                <div id="bag-1" class="hidden">
                    <p class="text-2xl font-bold mb-2">
                        Pengertian Puisi
                    </p>
                    <p class="text-lg leading-relaxed mb-3">
                        Puisi adalah cara manusia mengekspresikan diri mereka dengan kata-kata yang penuh makna dan emosi. Sejak zaman kuno hingga saat ini, puisi telah menjadi cermin dari beragam pengalaman manusia: kegembiraan, kesedihan, cinta, kehilangan, dan banyak lagi. Ketika seseorang menulis atau membaca puisi, mereka terhubung dengan aspek-aspek yang paling mendalam dari kemanusiaan kita.
                    </p>
                </div>
                <div id="bag-2" class="hidden">
                    <p class="text-2xl font-bold mb-2">
                        Sejarah Puisi
                    </p>
                    <p class="text-lg leading-relaxed mb-3">
                        Sejarah puisi adalah cerita tentang bagaimana manusia berbagi cerita, impian, dan kebijaksanaan melalui kata-kata yang terpilih dengan hati-hati. Dari kisah-kisah epik zaman kuno hingga puisi modern yang inovatif, setiap karya puisi merupakan ungkapan kehidupan yang unik, dan setiap pembaca atau pendengar menemukan makna yang berbeda dalam setiap bait dan barisnya.
                    </p>
                </div>
                <div id="bag-3" class="hidden">
                    <p class="text-2xl font-bold mb-2">
                        Fungsi Puisi
                    </p>
                    <p class="text-lg leading-relaxed mb-3">
                        Puisi adalah jendela ke dalam pikiran, perasaan, dan pengalaman manusia. Saat kita membaca atau menulis puisi, kita merasakan kekuatan kata-kata untuk menghibur, menginspirasi, atau mengubah kita. Melalui puisi, kita berbagi kehidupan kita dengan cara yang paling intim dan universal, karena setiap bait puisi adalah suara dari hati manusia
                    </p>
                </div>
                <a href="#" id="btn-materi" nilai="1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded fixed right-5 bottom-5 hidden">
                    Next
                </a>
            </div>

            <!-- Footer container -->
            <footer id="dialog"
            class="bg-zinc-50 text-center text-surface/75 text-white lg:text-left fixed bottom-0 left-0 w-full bg-opacity-20">
            <div class="flex border-b-2">
                <img id="gambar" src="{{url('img/charl.png')}}" class=" left-0 w-48 " alt="Image">
                <div
                class="flex items-center justify-center border-neutral-200 p-6 dark:border-white/10 lg:justify-between">
                    <div class="me-12 hidden lg:block">
                        <span class="text-lg font-bold"  id="charName">{{ Auth::user()->name }}</span>
                    </div>
                </div>

            </div>

            <!-- Main container div: holds the entire content of the footer, including four sections (TW Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
            <div class="mx-6 py-10 text-center md:text-left">
                <p id="cerita" class="text-lg font-bold text-white leading-relaxed mb-4" id="dialogue">
                    Selamat datang di desa kami, pengembara. Namaku Elara. Apa yang membawamu ke tempat yang terpencil ini?
                </p>
                <a href="#" id="btn-next" nilai="1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded fixed right-5 bottom-5">
                    Next
                </a>
            </div>
            </footer>
        </main>

        <div id="soal" class="hidden flex flex-col sm:justify-center items-center">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <form method="GET" id="formsoal" action="{{route('map',['id'=>$id])}}">
                    @csrf
                    <input id="no-bag" type="text" class="hidden" value="1">

                    @for ($x=1;$x<=5;$x++)
                    <div id="{{"soalbag".$x}}" class="hidden">
                        <div class="mt-4 hidden">
                            <x-input-label for="{{'no_soal'.$x}}" :value="__('no_soal')" />
                            <x-text-input id="{{'no_soal'.$x}}" class="block mt-1 w-full" type="text" name="{{'no_soal'.$x}}" value="{{$x}}" readonly  required autofocus />
                            <x-input-error :messages="$errors->get('no_soal')" class="mt-2" />
                        </div>

                        <!-- Deskripsi -->
                        <div class="mt-4">
                            <x-input-label for="{{'Soal'.$x}}" :value="__('Soal '.$x)" />
                            {{-- <x-textarea-input id="{{'Soal'.$x}}" class="block mt-1 w-full h-auto" name="{{'Soal'.$x}}" readonly required >{{$data[$x-1]->Soal}} </x-textarea-input> --}}
                            {{-- <x-input-error :messages="$errors->get('Soal')" class="mt-2" /> --}}
                            <p class="text-lg leading-relaxed mb-3">
                                {{$data[$x-1]->Soal}}
                            </p>
                        </div>

                        <div class="mt-4">
                            <x-text-input-button type="button" id="{{'jawaban1'.$x}}" posisi="1" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawab" name="{{'jawaban1'.$x}}">{{$data[$x-1]->jawaban1}}</x-text-input-button>
                            <x-text-input-button-error type="button" id="{{'jawabanerror1'.$x}}" posisi="1" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawaberror hidden" name="{{'jawaban1'.$x}}">{{$data[$x-1]->jawaban1}}</x-text-input-button-error>
                            <x-input-error :messages="$errors->get('jawaban1')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-text-input-button type="button" id="{{'jawaban2'.$x}}" posisi="2" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawab" name="{{'jawaban2'.$x}}">{{$data[$x-1]->jawaban2}}</x-text-input-button>
                            <x-text-input-button-error type="button" id="{{'jawabanerror2'.$x}}" posisi="2" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawaberror hidden" name="{{'jawaban2'.$x}}">{{$data[$x-1]->jawaban2}}</x-text-input-button-error>
                        </div>

                        <div class="mt-4">
                            <x-text-input-button type="button" id="{{'jawaban3'.$x}}" posisi="3" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawab" name="{{'jawaban3'.$x}}">{{$data[$x-1]->jawaban3}}</x-text-input-button>
                            <x-text-input-button-error type="button" id="{{'jawabanerror3'.$x}}" posisi="3" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawaberror hidden" name="{{'jawaban3'.$x}}">{{$data[$x-1]->jawaban3}}</x-text-input-button-error>
                            <x-input-error :messages="$errors->get('jawaban3')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-text-input-button type="button" id="{{'jawaban4'.$x}}" posisi="4" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawab" name="{{'jawaban4'.$x}}">{{$data[$x-1]->jawaban4}}</x-text-input-button>
                            <x-text-input-button-error type="button" id="{{'jawabanerror4'.$x}}" posisi="4" jawab="{{$data[$x-1]->Kunci_Jawaban}}" class="jawaberror hidden" name="{{'jawaban4'.$x}}">{{$data[$x-1]->jawaban4}}</x-text-input-button-error>
                            <x-input-error :messages="$errors->get('jawaban4')" class="mt-2" />
                        </div>

                        <!-- Deskripsi -->
                        <div id="alasannya{{$x}}" class="mt-4 hidden">
                            <x-input-label for="{{'Alasan'.$x}}" :value="__('Penjelasan')" />
                            {{-- <x-textarea-input id="{{'Alasan'.$x}}" class="block mt-1 w-full" name="{{'Alasan'.$x}}" required >{{$data[$x-1]->Alasan}} </x-textarea-input> --}}
                            <p class="text-md leading-relaxed mb-3">{{'jawabannya pilihan paling benar adalah pilihan ke-'.$data[$x-1]->Kunci_Jawaban.' karena '.$data[$x-1]->Alasan}}</p>
                            <x-input-error :messages="$errors->get('Alasan')" class="mt-2" />
                            <button type="button" class="next-soal mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" id="{{"next-soal".$x}}">Next</button>
                        </div>
                    </div>

                    @endfor


                    <div class="flex items-center justify-end mt-4 hidden">
                        {{-- <x-button href="{{route('soal',['id'=>$id])}}" class="bg-red-500 hover:bg-red-400 text-white font-bold border-red-700 hover:border-red-500">
                            {{ __('Kembali') }}
                        </x-button> --}}

                        <x-primary-button class="ms-4">
                            {{ __('Simpan') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @Once('scripts')
        <script>
            $(document).ready(function() {
                ubahdialog();
                $('#btn-next').click(function() {
                    ubahdialog();
                });

                $('#btn-materi').click(function() {
                    var next = $('#btn-materi').attr("nilai");
                    if (next == "1") {
                        $('#dialog').removeClass('hidden');
                        $('#cerita').text("Kamu sudah berhasil mempelajari pengertian puisi dengan baik! Sekarang bersiaplah untuk tantangan yang sesungguhnya! ");
                        $('#materi').addClass('hidden');
                    }else{
                        $('#main').addClass('hidden');
                        $('#soal').removeClass('hidden');
                    }
                    $('#btn-next').attr("nilai", 8);
                    $('#latar').css("background-image", "url('{{ url('img/HutanA.jpg') }}')");
                });
            });

            function ubahdialog() {
                var next = $('#btn-next').attr("nilai");
                console.log(next);
                switch (next) {
                    case "1":
                        $('#gambar').hide();
                        $('#charName').text("????");
                        $('#cerita').text("Selamat datang di desa kami, pengembara. Namaku Elara. Apa yang membawamu ke tempat yang terpencil ini?");
                        break;

                    case "2":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        // $('#latar').css("background-image", "url('{{ url('img/hutani.png') }}')");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Namaku {{ Auth::user()->name }}. Aku sedang mencari sebuah pusaka yang hilang. Kakekku pernah bercerita tentang Hutan Ajaib Tirandia dan makhluk legendaris yang hidup di sana. Aku percaya hutan ini menyimpan pecahan pertama pusaka tersebut");
                        break;

                    case "3":
                        $('#gambar').attr("src", "{{url('img/elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Elara");
                        $('#cerita').text("Ah, Hutan Ajaib Tirandia. Hutan itu memang penuh dengan misteri dan bahaya. Hanya sedikit yang berani memasukinya, dan lebih sedikit lagi yang kembali. Apa yang kamu ketahui tentang pusaka ini?");
                        break;

                    case "4":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Kakekku berkata bahwa pusaka itu memiliki kekuatan yang luar biasa, dan hanya mereka yang cukup bijaksana dan berani yang bisa menemukannya. Aku sudah berhari-hari menyusuri hutan dan baru menemukan kuil kuno dengan sinar magis yang memancar dari dalamnya. Sinar apakah itu?");
                        break;

                    case "5":
                        $('#gambar').attr("src", "{{url('img/Elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Elara");
                        $('#cerita').text("Menurut cerita, di dalam kuil tersebut terdapat sebuah logam yang bersinar bahkan dalam kegelapan. Penduduk setempat meletakkannya dalam kuil namun mereka sudah melupakannya selama bertahun-tahun. Di dalam kuil, kau akan menemukan sebuah teka-teki yang rumit. Hanya mereka yang memiliki ketekunan dan kecerdasan yang bisa memecahkannya. Ingatlah, setiap langkah yang kau ambil membawamu lebih dekat pada pecahan pertama dari pusaka yang bersinar. Tetaplah berani dan waspada, ");
                        break;

                    case "6":
                        $('#gambar').attr("src", "{{url('img/Elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Elara");
                        $('#cerita').text("Mari kita bersama-sama membaca jurnal tentang puisi ini!");
                        break;

                    case "7":
                        $('#dialog').addClass('hidden');
                        $('#materi').removeClass('hidden');
                        setTimeout(() => {
                            $('#bag-1').slideDown();
                            setTimeout(() => {
                                $('#bag-2').slideDown();
                                setTimeout(() => {
                                    $('#bag-3').slideDown();
                                    setTimeout(() => {
                                        $('#btn-materi').slideDown();
                                    }, 5000);
                                }, 1000);
                            }, 1000);
                        }, 1000);
                        $('#latar').css("background-image", "url('{{ url('img/Kertas.png') }}')");
                        break;

                    case "8":
                        $('#main').addClass('hidden');
                        $('#soal').removeClass('hidden');
                        getsoal();
                        break;

                    case "9":
                        $('#soal').addClass('hidden');
                        $('#main').removeClass('hidden');
                        $('#gambar').attr("src", "{{url('img/Elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Elara");
                        $('#cerita').text("Luar biasa, {{ Auth::user()->name }}! Kau telah memecahkan teka-teki di kuil dan menemukan pecahan pertama pusaka. Prestasimu luar biasa.");
                        break;

                    case "10":
                        $('#formsoal').submit();
                        break;

                    default:
                        break;
                }
                next++;
                $('#btn-next').attr("nilai", next);
            }

            function getsoal() {
                var no = $('#no-bag').val();
                console.log(no,"no")
                $('#soalbag'+no).removeClass('hidden');
            }

            $(".jawab").click(function(){
                var no = $('#no-bag').val();
                var jawab = $(this).attr("jawab");
                var posisi = $(this).attr("posisi");
                for (let i = 1; i <= 5; i++) {
                    $('#soalbag'+i).removeClass('hidden');
                    $('#soalbag'+i).addClass('hidden');
                }
                if (no == 11) {
                    $('#formsoal').submit();
                }
                // else if (parseInt(no) % 2 === 0){
                //     $('#no-bag').val(parseInt(no)+1);
                //     getsoal();
                // }
                else{
                    getsoal();

                    if (jawab == posisi) {
                    }else{
                        $(this).addClass('hidden');
                        $("#jawabanerror"+posisi+""+no).removeClass('hidden')
                    }
                    $("#alasannya"+no).removeClass('hidden');
                }
            });

            $(".next-soal").click(function(){
                for (let i = 1; i <= 5; i++) {
                    $('#soalbag'+i).removeClass('hidden');
                    $('#soalbag'+i).addClass('hidden');
                }
                var no = $('#no-bag').val();
                $('#no-bag').val(parseInt(no)+1);
                getsoal();
                if (no == 5) {
                    // $('#formsoal').submit();
                    $('#btn-next').attr("nilai", 9);
                    ubahdialog();
                }
            });
        </script>
    @endOnce
</x-narasi-layout>
