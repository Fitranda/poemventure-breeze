<x-app-layout>
    <h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas {{$kelas->Nama}}</h2>
    <div class="flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md  mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('kelasguru.update') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="kode_kelas" :value="__('Kode Kelas')" />
                    <x-text-input id="kode_kelas" class="block mt-1 w-full" type="text" name="kode_kelas" value="{{$kelas->kode_kelas}}" readonly required autofocus />
                    <x-text-input id="id" class="block mt-1 w-full hidden" type="text" name="id" value="{{$kelas->id}}" readonly required autofocus />
                    <x-text-input id="cekpw" class="block mt-1 w-full hidden" type="text" name="cekpw" value="0" readonly required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="Nama" :value="__('Nama Kelas')" />
                    <x-text-input id="Nama" class="block mt-1 w-full" type="text" name="Nama" value="{{$kelas->Nama}}" required autofocus />
                    <x-input-error :messages="$errors->get('Nama')" class="mt-2" />
                </div>

                <!-- Deskripsi -->
                <div class="mt-4">
                    <x-input-label for="Deskripsi" :value="__('Deskripsi')" />
                    <x-textarea-input id="Deskripsi" class="block mt-1 w-full" name="Deskripsi" required > {{$kelas->Deskripsi}}</x-textarea-input>
                    <x-input-error :messages="$errors->get('Deskripsi')" class="mt-2" />
                </div>

                <div class="flex items-center me-4 mt-4">
                    <input id="red-checkbox" type="checkbox" value="" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="red-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mengubah password</label>
                </div>

                <div id="passwordkotak" class="hidden">
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
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
    @Once('scripts')
        <script>
            $(document).ready(function() {
                console.log("masuk");
                $('#red-checkbox').change(function() {
                    console.log("tidak");
                    if ($(this).is(':checked')) {
                        $('#passwordkotak').slideDown();
                        $('#cekpw').val('1');
                    } else {
                        $('#passwordkotak').slideUp();
                        $('#cekpw').val('0');
                    }
                });
            });
        </script>
    @endOnce
</x-app-layout>
