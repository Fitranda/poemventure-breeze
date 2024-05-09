<x-map-layout>
    <audio autoplay loop>
        <source src="{{ asset('audio/sound.mp3') }}" type="audio/mpeg">
    </audio>

    <a href="{{ route('kelasguru') }}" class="btn-danger" style="transform: translate(885px, 750px)">BAB I</a>
    <a href="{{ route('register') }}" class="btn-dooms" style="transform: translate(650px, 450px);">BAB II</a>
    <a href="{{ route('register') }}" class="btn-sea" style="transform: translate(1250px, 10px);">BAB III</a>
    <a href="{{ route('register') }}" class="btn-dwarf" style="transform: translate(1500px, 600px);">BAB IV</a>
    <a href="{{ route('register') }}" class="btn-nature" style="transform: translate(1350px, 250px);">BAB V</a>
    <a href="{{ route('register') }}" class="btn-danger" style="transform: translate(350px, 20px);">SHOP</a>
</x-map-layout>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poemventure</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="container" style="
  background-image: url('{{ url('img/map.jpg') }}');
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 100vh;
">
<div>
    <a href="" class="btn-danger" style="transform: translatey(750px) translatex(125px)">BAB I</a>
    <a href="" class="btn-dooms" style="transform: translatey(325px) translatex(465px)">BAB II</a>
    <a href="" class="btn-sea" style="transform: translatey(700px) translatex(815px)">BAB III</a>
    <a href="" class="btn-dwarf" style="transform: translatey(325px) translatex(1120px)">BAB IV</a>
    <a href="" class="btn-nature" style="transform: translatey(860px) translatex(1450px)">BAB V</a>
</div>
</body>
</html> --}}
