<x-app-layout>
    <h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas</h2>
    <div class="flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('kelassiswa.store') }}">
                @csrf

                <!-- Kode kelas -->
                <div>
                    <x-input-label for="kode_kelas" :value="__('Kode Kelas')" />
                    <x-text-input id="kode_kelas" class="block mt-1 w-full" type="text" name="kode_kelas" :value="old('kode_kelas')" required autofocus />
                    <x-input-error :messages="$errors->get('kode_kelas')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button href="{{ route('kelasguru') }}" class="bg-red-500 hover:bg-red-400 text-white font-bold border-red-700 hover:border-red-500">
                        {{ __('Kembali') }}
                    </x-button>

                    <x-primary-button class="ms-4">
                        {{ __('Simpan') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
