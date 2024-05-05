<x-app-layout>
    <h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas</h2>
    <div class="flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('kelasguru.store') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="Nama" :value="__('Nama Kelas')" />
                    <x-text-input id="Nama" class="block mt-1 w-full" type="text" name="Nama" :value="old('Nama')" required autofocus />
                    <x-input-error :messages="$errors->get('Nama')" class="mt-2" />
                </div>

                <!-- Deskripsi -->
                <div class="mt-4">
                    <x-input-label for="Deskripsi" :value="__('Deskripsi')" />
                    <x-textarea-input id="Deskripsi" class="block mt-1 w-full" name="Deskripsi" :value="old('Deskripsi')" required > </x-textarea-input>
                    <x-input-error :messages="$errors->get('Deskripsi')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
