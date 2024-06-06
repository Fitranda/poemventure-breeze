<x-narasi-layout>
    <div id="latar" class="min-h-screen max-h-screen bg-cover bg-center bg-no-repeat" style="
            background-image: url('{{ url('img/hutan.jpg') }}');
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
                        $('#gambar').hide();
                        $('#charName').text("????");
                        $('#cerita').text("Selamat datang di desa kami, pengembara. Namaku Elara. Apa yang membawamu ke tempat yang terpencil ini?");
                        break;

                    case "2":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#latar').css("background-image", "url('{{ url('img/hutani.png') }}')");
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
                        $('#gambar').attr("src", "{{url('img/elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Elara");
                        $('#cerita').text("Menurut cerita, di dalam kuil tersebut terdapat sebuah logam yang bersinar bahkan dalam kegelapan. Penduduk setempat meletakkannya dalam kuil namun mereka sudah melupakannya selama bertahun-tahun. Di dalam kuil, kau akan menemukan sebuah teka-teki yang rumit. Hanya mereka yang memiliki ketekunan dan kecerdasan yang bisa memecahkannya. Ingatlah, setiap langkah yang kau ambil membawamu lebih dekat pada pecahan pertama dari pusaka yang bersinar. Tetaplah berani dan waspada, ");
                        break;

                    case "6":
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
