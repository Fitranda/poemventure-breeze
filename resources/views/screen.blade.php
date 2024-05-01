<!DOCTYPE html>
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
  background-image: url('{{ url('img/gambar1.jpg') }}');
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 100vh;
">
<div>
    <span class="centered-text">Poemventure</span>
    <a href="{{ route('login') }}" class="btn-custom" style="transform: translate(-150%, 100%);">Login</a>
    <a href="{{ route('register') }}" class="btn-custom" style="transform: translate(40%, 100%);">Daftar</a>
</div>
</body>
</html>
