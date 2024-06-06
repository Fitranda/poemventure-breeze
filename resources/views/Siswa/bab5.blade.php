<x-narasi-layout>
    <div id="latar" class="min-h-screen max-h-screen bg-cover bg-center bg-no-repeat" style="
            background-image: url('{{ url('img/gua.jpg') }}');
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
                        $('#cerita').text("Kamu telah tiba di lokasi terakhir dari pusaka pecahan yang kamu cari. Gua Kristal di hadapanmu memancarkan cahaya gemerlap dari dinding-dindingnya yang tertutup kristal. Kamu tiba di hadapan seorang penyihir, yang menjaga pecahan terakhir dari pusaka yang kamu cari.");
                        break;

                    case "2":
                        $('#gambar').attr("src", "{{url('img/witch.png')}}");
                        $('#latar').css("background-image", "url('{{ url('img/guai.jpg') }}')");
                        $('#gambar').show();
                        $('#charName').text("Penyihir");
                        $('#cerita').text("Pemain, perjalananmu telah membawamu jauh, melewati banyak rintangan dan bahaya. Namun, disinilah kau harus berhenti. Pecahan terakhir dari pusaka tidak boleh jatuh ke tangan siapapun, termasuk dirimu. Kekuatan yang terkandung di dalamnya terlalu besar, terlalu berbahaya. Aku tahu niatmu mungkin baik, namun niat baik sering kali tersesat dalam bayang-bayang kekuatan yang terlalu besar untuk dikendalikan. Aku tidak bisa memberikan pecahan ini padamu kecuali kau bisa membuktikan kebijaksanaanmu. Jawablah tantanganku, dan jika kamu berhasil, mungkin saja aku akan mempertimbangkan untuk memberikan pecahan ini padamu. Apakah kau siap?");
                        break;

                    case "3":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku Siap!");
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
