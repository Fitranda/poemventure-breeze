<x-map-layout>
    <audio id="backgroundMusic"  autoplay loop>
        <source src="{{ asset('audio/sound.mp3') }}" type="audio/mpeg">
    </audio>

    {{-- <a href="{{ route('soal.siswa',['id'=>$id]) }}" class="btn-custom" style="transform: translate(-400%, 200%);">BAB I</a> --}}
    {{-- <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(-400%, 200%);">BAB I</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(-200%, 200%);">BAB II</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(-20%, 0%)">BAB III</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(400%, 100%)">BAB IV</a>
    <a href="{{ route('soal.siswa',['id'=>1]) }}" class="btn-custom" style="transform: translate(300%, 300%)">BAB V</a> --}}
    {{-- <a href="{{ route('register') }}" class="btn-custom" style="">SHOP</a> --}}
    <!-- Create a modal container -->
    <!-- Button layout with dashed lines -->
<div class="flex flex-wrap justify-center">
    <a href="{{ route('bab1',['id'=>1]) }}" class="btn-custom mx-4 mb-4" style="transform: translate(-400%, 200%);">BAB I</a>
    <div class="w-0.5 h-full bg-neutral-100 dark:bg-white/10"></div>
    <a href="{{ route('bab2',['id'=>1]) }}" class="btn-custom mx-4 mb-4" style="transform: translate(-200%, 200%);">BAB II</a>
    <div class="w-0.5 h-full bg-neutral-100 dark:bg-white/10"></div>
    <a href="{{ route('bab3',['id'=>1]) }}" class="btn-custom mx-4 mb-4" style="transform: translate(-20%, 0%)">BAB III</a>
    <div class="w-0.5 h-full bg-neutral-100 dark:bg-white/10"></div>
    <a href="{{ route('bab4',['id'=>1]) }}" class="btn-custom mx-4 mb-4" style="transform: translate(400%, 100%)">BAB IV</a>
    <div class="w-0.5 h-full bg-neutral-100 dark:bg-white/10"></div>
    <a href="{{ route('bab5',['id'=>1]) }}" class="btn-custom mx-4 mb-4" style="transform: translate(300%, 300%)">BAB V</a>
  </div>

  <!-- Add the following CSS to make the buttons responsive and centered -->
  <style>
   .btn-custom {
      @apply flex justify-center items-center;
      @apply w-full md:w-1/2 lg:w-1/3 xl:w-1/4;
      @apply mx-4 mb-4;
      @apply border-dashed border-2 border-indigo-600;
      @apply rounded-full;
      @apply text-lg font-bold;
      @apply text-white;
      @apply bg-gradient-to-r from-indigo-500 to-pink-500;
      @apply hover:bg-gradient-to-r hover:from-pink-500 hover:to-indigo-500;
    }
  </style>
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
