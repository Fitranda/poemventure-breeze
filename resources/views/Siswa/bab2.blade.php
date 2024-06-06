<x-narasi-layout>
    <div id="latar" class="min-h-screen max-h-screen bg-cover bg-center bg-no-repeat" style="
            background-image: url('{{ url('img/gunung.jpg') }}');
        ">
        <main class="p-10">

            <!-- Footer container -->
            <footer
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
                    Selamat datang di desa kami, pengembara. Namaku Elara. Apa yang
membawamu ke tempat yang terpencil ini?

                </p>
                <a href="#" id="btn-next" nilai="1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded fixed right-5 bottom-5">
                    Next
                </a>
            </div>
            </footer>
        </main>
    </div>
    @Once('scripts')
        <script>
            $(document).ready(function() {
                ubahdialog();
                $('#btn-next').click(function() {
                    ubahdialog();
                });
            });

            function ubahdialog() {
                var next = $('#btn-next').attr("nilai");
                console.log(next);
                switch (next) {
                    case "1":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku tidak datang untuk bertarung tanpa alasan. Pecahan pusaka ini adalah kunci untuk menyelamatkan dunia kita dari kehancuran. Aku butuh itu untuk menghentikan kegelapan yang semakin kuat.");
                        break;

                    case "2":
                        $('#gambar').attr("src", "{{url('img/naga.png')}}");
                        $('#gambar').show();
                        $('#latar').css("background-image", "url('{{ url('img/gunungi.jpg') }}')");
                        $('#charName').text("Naga");
                        $('#cerita').text("Hahahah, kegelapan, katamu? Kau kira aku tidak tahu apa yang sedang terjadi? Dunia ini selalu dipenuhi oleh kegelapan dan cahaya. Namun, pecahan pusaka ini bukan sesuatu yang bisa dimiliki oleh manusia sembarangan.");
                        break;

                    case "3":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku tahu risikonya. Aku telah melalui bahaya yang tak terhitung untuk sampai ke sini. Berikan aku kesempatan untuk menjelaskan dan mendapatkan kepercayaanmu.");
                        break;

                    case "4":
                        $('#gambar').attr("src", "{{url('img/naga.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Naga");
                        $('#cerita').text("Baiklah, manusia. Bicaralah. Kenapa aku harus memberikan pecahan pusaka ini padamu?");
                        break;

                    case "5":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Dunia kita sedang sekarat. Kegelapan yang menyebar berasal dari kekuatan jahat yang telah menguasai hati banyak orang. Aku sedang mengumpulkan pecahan pusaka untuk menyatukan kembali kekuatan yang bisa mengalahkan kegelapan itu. Aku telah berhasil mendapatkan pecahan pertama, dan aku tidak akan berhenti sampai misiku selesai.");
                        break;

                    case "6":
                        $('#gambar').attr("src", "{{url('img/naga.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Naga");
                        $('#cerita').text("Kau memiliki keberanian, manusia, itu jelas. Namun, keberanian saja tidak cukup. Kau harus memiliki kecerdasan dan hati yang murni untuk memegang kekuatan pusaka ini.");
                        break;

                    case "7":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku siap membuktikan diriku. Jika aku harus bertarung denganmu untuk mendapatkan pecahan itu, maka aku akan melakukannya.");
                        break;

                    case "8":
                        $('#gambar').attr("src", "{{url('img/naga.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Naga");
                        $('#cerita').text("Sangat baik. Kita akan melihat apakah kau benar-benar layak. Siapkan dirimu, manusia. Pertarungan ini akan menentukan nasibmu dan nasib dunia.");
                        break;

                    case "9":
                        const url = "{{ route('soal.siswa',['id'=>1]) }}";
                        window.location.href = url;
                        break;

                    default:
                        break;
                }
                next++;
                $('#btn-next').attr("nilai", next);
            }
        </script>
    @endOnce
</x-narasi-layout>
