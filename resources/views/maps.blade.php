<x-map-layout>
    <audio id="backgroundMusic"  autoplay loop>
        <source src="{{ asset('audio/sound.mp3') }}" type="audio/mpeg">
    </audio>

    {{-- <a href="{{ route('soal.siswa',['id'=>$id]) }}" class="btn-custom" style="transform: translate(-400%, 200%);">BAB I</a> --}}
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(-400%, 200%);">BAB I</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(-200%, 200%);">BAB II</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(-20%, 0%)">BAB III</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(400%, 100%)">BAB IV</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(300%, 300%)">BAB V</a>
    {{-- <a href="{{ route('register') }}" class="btn-custom" style="">SHOP</a> --}}
    @Once('scripts')
        <script>
            $(document).ready(function() {
                const backgroundMusic = $('#backgroundMusic')[0];
                function playBackgroundMusic() {
                    console.log(backgroundMusic);
                    backgroundMusic.play();
                }

                // Memberhentikan musik
                function pauseBackgroundMusic() {
                    backgroundMusic.pause();
                }

                playBackgroundMusic();
            });
        </script>
    @endOnce
</x-map-layout>
