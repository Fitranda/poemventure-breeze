<x-narasi-layout>
    <div id="latar" class="min-h-screen max-h-screen bg-cover bg-center bg-no-repeat" style="
            background-image: url('{{ url('img/rumah.jpg') }}');
        ">
        <main class="p-10">

            <!-- Footer container -->
            <footer
            class="bg-zinc-50 text-center text-surface/75 text-white lg:text-left fixed bottom-0 left-0 w-full bg-opacity-20">
            <div class="flex border-b-2">
                <img hidden id="gambar" src="{{url('img/charl.png')}}" class=" left-0 w-48 " alt="Image">
                <div
                class="flex items-center justify-center border-neutral-200 p-6 dark:border-white/10 lg:justify-between">
                    <div class="me-12 hidden lg:block">
                        <span class="text-lg font-bold"  id="charName"></span>
                    </div>
                </div>

            </div>

            <!-- Main container div: holds the entire content of the footer, including four sections (TW Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
            <div class="mx-6 py-10 text-center md:text-left">
                <p id="cerita" class="text-lg font-bold text-white leading-relaxed mb-4" id="dialogue">
                    Di sebuah desa kecil yang terpencil, hiduplah seorang pemuda yang penuh dengan rasa
                    ingin tahu dan semangat petualang. Pemuda itu adalah kamu, {{ Auth::user()->name }}. Sejak kecil,
                    kamu selalu terpesona oleh cerita-cerita menakjubkan yang diceritakan oleh kakekmu,
                    seorang petualang legendaris yang telah menjelajahi dunia dan menemukan berbagai
                    keajaiban tersembunyi.
                    Malam ini, di bawah sinar bulan purnama yang terang, kamu duduk bersama kakekmu di
                    depan perapian di rumah tua yang penuh dengan kenangan. Kamu menatap wajah tua
                    kakekmu yang penuh dengan garis-garis pengalaman, matanya bersinar dengan cahaya
                    yang tak pernah pudar meskipun usianya terus bertambah
                </p>
                <a href="#" id="btn-next" nilai="1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded fixed right-3 bottom-3">
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
                        $('#cerita').text("Di sebuah desa kecil yang terpencil, hiduplah seorang pemuda yang penuh dengan rasa"+
                        "ingin tahu dan semangat petualang. Pemuda itu adalah kamu, {{ Auth::user()->name }}. Sejak kecil,"+
                        "kamu selalu terpesona oleh cerita-cerita menakjubkan yang diceritakan oleh kakekmu,"+
                        "seorang petualang legendaris yang telah menjelajahi dunia dan menemukan berbagai"+
                        "keajaiban tersembunyi."+
                        "Malam ini, di bawah sinar bulan purnama yang terang, kamu duduk bersama kakekmu di"+
                        "depan perapian di rumah tua yang penuh dengan kenangan. Kamu menatap wajah tua"+
                        "kakekmu yang penuh dengan garis-garis pengalaman, matanya bersinar dengan cahaya"+
                        "yang tak pernah pudar meskipun usianya terus bertambah");
                        break;

                    case "2":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#latar').css("background-image", "url('{{ url('img/rumahi.jpg') }}')");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Kakek, ceritakan lagi tentang petualanganmu. Aku tidak pernah bosan mendengarnya");
                        break;

                    case "3":
                        $('#gambar').attr("src", "{{url('img/kakek.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Kakek");
                        $('#cerita').text("Ah, {{ Auth::user()->name }}, kau selalu tertarik dengan kisah-kisah lama. Baiklah, akan kuceritakan sesuatu yang sangat istimewa malam ini, di bawah sinar bulan purnama ini.");
                        break;

                    case "4":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Apa itu, Kek? Apakah tentang harta karun tersembunyi atau peradaban kuno yang hilang?");
                        break;

                    case "5":
                        $('#gambar').attr("src", "{{url('img/kakek.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Kakek");
                        $('#cerita').text("Lebih dari itu. Ini adalah tentang pusaka keluarga kita, yang telah hilang selama berabad-abad. Konon, pusaka itu memiliki kekuatan luar biasa yang dapat mengubah nasib dunia.");
                        break;

                    case "6":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Pusaka keluarga? Aku belum pernah mendengar cerita ini sebelumnya. Apa itu, Kek?");
                        break;

                    case "7":
                        $('#gambar').attr("src", "{{url('img/kakek.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Kakek");
                        $('#cerita').text("Dahulu kala, nenek moyang kita memiliki pusaka yang luar biasa. Tapi, pusaka itu hilang saat peradaban kita runtuh. Sejak saat itu, banyak yang mencoba mencarinya, namun tidak ada yang berhasil");
                        break;

                    case "8":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Apa yang membuat pusaka itu begitu istimewa?");
                        break;

                    case "9":
                        $('#gambar').attr("src", "{{url('img/kakek.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Kakek");
                        $('#cerita').text("Pusaka itu dipercaya dapat memberikan kekuatan besar kepada pemiliknya,kekuatan yang mampu mengubah nasib dunia. Namun, kekuatan sebesar itu juga membawa tanggung jawab besar");
                        break;

                    case "10":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Jadi, di mana pusaka itu sekarang, Kek? Apakah ada petunjuk tentang lokasinya?");
                        break;

                    case "11":
                        $('#gambar').attr("src", "{{url('img/kakek.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Kakek");
                        $('#cerita').text("Ya, ada. Dalam petualanganku, aku menemukan peta kuno yang menunjukkan lokasi pusaka itu. Tempatnya jauh dan penuh dengan bahaya. Namun, aku sudah terlalu tua untuk perjalanan sejauh itu.");
                        break;

                    case "12":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku akan pergi, Kek! Aku akan menemukan pusaka itu dan melanjutkan warisan keluarga kita");
                        break;

                    case "13":
                        $('#gambar').attr("src", "{{url('img/kakek.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Kakek");
                        $('#cerita').text("Aku tahu kau memiliki jiwa petualang, {{ Auth::user()->name }}. Tapi ingatlah, perjalanan ini tidak akan mudah. Kau harus bersiap menghadapi banyak rintangan dan bahaya. Namun, aku percaya padamu. Kau adalah cucuku, dan semangat petualang itu ada dalam darahmu");
                        break;

                    case "14":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku tidak akan mengecewakanmu, Kek. Aku akan menemukan pusaka itu dan membawa kebanggaan bagi keluarga kita");
                        break;

                    case "15":
                        $('#gambar').attr("src", "{{url('img/kakek.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Kakek");
                        $('#cerita').text("Baiklah, kalau begitu. Esok hari kita akan mulai persiapan. Dan ingatlah, apapun yang terjadi, tetaplah berpegang pada keberanian dan kebijaksanaanmu.");
                        break;

                    case "16":
                        const url = "{{ route('map',['id'=>1]) }}";
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
