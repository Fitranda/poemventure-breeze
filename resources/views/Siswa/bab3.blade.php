<x-narasi-layout>
    <div id="latar" class="min-h-screen max-h-screen bg-cover bg-center bg-no-repeat" style="
            background-image: url('{{ url('img/kotkun.jpg') }}');
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
                    Selamat datang di desa kami, pengembara. Namaku Elara. Apa yang membawamu ke tempat yang terpencil ini?
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
                        $('#charName').text("");
                        $('#cerita').text("(nama pemain) telah tiba di Kota Zaramaraz. Udara terasa kering dan sunyi, hanya suara angin yang sesekali melintasi reruntuhan kota. Reruntuhan bangunan-bangunan kuno menyembunyikan misteri besar yang menunggu untuk diungkap. Gerbangnya yang besar sebagian besar sudah runtuh dan terkubur pasir. Kota itu pasti terlihat megah di masanya.");
                        break;

                    case "2":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#latar').css("background-image", "url('{{ url('img/kotkuni.jpg') }}')");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Rasanya seperti aku telah terlempar ke dalam masa lalu. Aku, {{ Auth::user()->name }}, petualang yang haus akan tantangan, kini siap menjelajahi lorong-lorong bawah tanah yang gelap ini. Teka-teki dan bahaya mungkin menunggu di setiap sudut, tetapi aku tak gentar. Ayo, mari kita mulai petualangan ini!");
                        break;

                    case "3":
                        $('#gambar').hide();
                        $('#charName').text("");
                        $('#cerita').text("Pemain melangkah hati-hati di antara puing-puing dan reruntuhan, mencari jalan ke dalam lorong-lorong gelap yang tersembunyi di bawah permukaan pasir gurun. Udara semakin lembab dan hening saat ia memasuki terowongan gelap itu, hanya cahaya remang-remang yang datang dari obor yang terbakar di dinding yang membimbing langkahnya. Namun, tiba-tiba, tanah di bawah kakinya runtuh. Dengan terkejut, pemain jatuh ke dalam lubang yang tersembunyi, terjebak dalam kegelapan. Ia melihat sekeliling dan menemukan pintu dengan teka-teki di depannya. Ia harus memecahkan teka-teki itu untuk bisa keluar");
                        break;

                    case "4":
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
