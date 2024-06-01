<x-app-layout>
    <span class="centered-text">Selamat Datang {{ Auth::user()->name }}</span>
    <a href="{{ route('prolog',['id'=>1]) }}" class="btn-custom" style="transform: translate(-70%, 100%);">Kelas</a>
</x-app-layout>
