<x-body-layout>
    <div class="relative overflow-hidden mx-auto">
        <img src="{{ asset('img/paper.png') }}" class="mx-auto opacity-55 object-cover" style="width: 95pc; height: 42pc" alt="">
        <textarea name="" id="" class="absolute inset-0 mx-auto text-center bg-transparent border-none text-2xl font-bold font-sans" style="width: 65%; height: 80%; top: 50%; transform: translateY(-50%);">Di sebuah dunia yang penuh misteri dan keajaiban, hiduplah seorang petualang yang bernama {{ Auth::user()->name }}. Sejak kecil, {{ Auth::user()->name }} telah terpesona oleh cerita-cerita yang diceritakan oleh kakeknya tentang pusaka-pusaka kuno dan petualangan yang menegangkan. Salah satu cerita yang paling menarik bagi {{ Auth::user()->name }} adalah tentang sebuah pusaka warisan yang konon telah hilang keberadaannya selama berabad-abad.
        </textarea>
    </div>
</x-body-layout>
