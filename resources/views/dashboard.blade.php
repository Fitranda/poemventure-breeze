<x-app-layout>
    <audio autoplay loop>
        <source src="{{ asset('audio/dash.mp3') }}" type="audio/mpeg">
    </audio>

    <span class="centered-text">Selamat Datang {{ Auth::user()->name }}</span>
    <a href="{{ route('kelasguru') }}" class="btn-custom" style="transform: translate(-150%, 100%);">Kelas</a>
    <a href="{{ route('register') }}" class="btn-custom" style="transform: translate(40%, 100%);">Laporan</a>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
