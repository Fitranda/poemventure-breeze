<x-narasi-layout>
    <div id="latar" class="min-h-screen max-h-screen bg-cover bg-center bg-no-repeat" style="
            background-image: url('{{ url('img/drageoth.jpg') }}');
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
                        $('#latar').css("background-image", "url('{{ url('img/drageothi.png') }}')");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Salam, para kurcaci. Aku datang ke sini bukan untuk membawa malapetaka, tapi untuk mencari kebenaran. Aku mendengar bahwa di kota Draegoth ini, tersembunyi pusaka yang terakhir. Aku butuh bantuan kalian untuk menemukannya.");
                        break;

                    case "2":
                        $('#gambar').attr("src", "{{url('img/elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Gortag");
                        $('#cerita').text("Berhenti di situ, pengelana! Kau pikir kami akan menyerahkan lokasi pusaka begitu saja? Kau salah besar! Kami para kurcaci telah menjaga rahasia ini selama berabad-abad, dan tidak akan menyerahkannya pada sembarang orang.");
                        break;

                    case "3":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku mengerti kalian tidak mudah percaya pada orang luar. Namun, aku datang dengan niat baik dan bersedia membuktikan kesungguhanku. Tanyakan apa yang kalian inginkan, dan aku akan menjawab sebaik mungkin");
                        break;

                    case "4":
                        $('#gambar').attr("src", "{{url('img/elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Tharim");
                        $('#cerita').text("Kami tidak mudah percaya pada orang luar, terutama mereka yang datang mencari pusaka. Terlalu banyak yang datang dengan niat serakah, menginginkan kekuatan tanpa memahami konsekuensinya. Buktikan niat baikmu, atau bersiaplah menghadapi jebakan-jebakan kami");
                        break;

                    case "5":
                        $('#gambar').attr("src", "{{url('img/charl.png')}}");
                        $('#gambar').show();
                        $('#charName').text("{{ Auth::user()->name }}");
                        $('#cerita').text("Aku tidak mencari pusaka untuk kekuatan pribadi. Aku percaya pusaka ini memiliki tujuan yang lebih besar. Izinkan aku membuktikan diriku layak mendapatkan informasi yang kalian miliki.");
                        break;

                    case "6":
                        $('#gambar').attr("src", "{{url('img/elara.png')}}");
                        $('#gambar').show();
                        $('#charName').text("Bragna");
                        $('#cerita').text("Jika kau ingin jawaban, kau harus menunjukkan bahwa niatmu tulus. Kami akan memberimu serangkaian pertanyaan dan teka-teki. Hanya dengan menjawabnya, kami akan mempertimbangkan untuk memberitahumu lokasi pecahan pusaka terakhir. Bersiaplah, pengelana, karena ujian ini tidaklah mudah");
                        break;

                    case "7":
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
