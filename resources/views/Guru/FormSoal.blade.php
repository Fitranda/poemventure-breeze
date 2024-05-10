<x-app-layout>
    <h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas</h2>
    <div class="flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('soal.store') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-text-input id="id" class="block mt-1 w-full hidden" type="text" name="id" value="{{$id}}" readonly required autofocus />
                    <x-input-label for="BAB" :value="__('BAB')" />
                    <select id="BAB" name="BAB" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <x-input-error :messages="$errors->get('BAB')" class="mt-2" />
                </div>

                @for ($x=1;$x<=5;$x++)
                    <div class="mt-4">
                        <x-input-label for="{{'no_soal'.$x}}" :value="__('no_soal')" />
                        <x-text-input id="{{'no_soal'.$x}}" class="block mt-1 w-full" type="text" name="{{'no_soal'.$x}}" value="{{$x}}" readonly  required autofocus />
                        <x-input-error :messages="$errors->get('no_soal')" class="mt-2" />
                    </div>

                    <!-- Deskripsi -->
                    <div class="mt-4">
                        <x-input-label for="{{'Soal'.$x}}" :value="__('Soal '.$x)" />
                        <x-textarea-input id="{{'Soal'.$x}}" class="block mt-1 w-full" name="{{'Soal'.$x}}" required > </x-textarea-input>
                        <x-input-error :messages="$errors->get('Soal')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="{{'jawaban1'.$x}}" :value="__('Jawab A')" />
                        <x-text-input id="{{'jawaban1'.$x}}" class="block mt-1 w-full" name="{{'jawaban1'.$x}}"  required />
                        <x-input-error :messages="$errors->get('jawaban1')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="{{'jawaban2'.$x}}" :value="__('Jawab B')" />
                        <x-text-input id="{{'jawaban2'.$x}}" class="block mt-1 w-full" name="{{'jawaban2'.$x}}" required />
                        <x-input-error :messages="$errors->get('jawaban2')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="{{'jawaban3'.$x}}" :value="__('Jawab C')" />
                        <x-text-input id="{{'jawaban3'.$x}}" class="block mt-1 w-full" name="{{'jawaban3'.$x}}"  required />
                        <x-input-error :messages="$errors->get('jawaban3')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="{{'jawaban4'.$x}}" :value="__('Jawab D')" />
                        <x-text-input id="{{'jawaban4'.$x}}" class="block mt-1 w-full" name="{{'jawaban4'.$x}}" required />
                        <x-input-error :messages="$errors->get('jawaban4')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="{{'Kunci_Jawaban'.$x}}" :value="__('Kunci Jawaban')" />
                        <select id="{{'Kunci_Jawaban'.$x}}" name="{{'Kunci_Jawaban'.$x}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                        </select>
                        <x-input-error :messages="$errors->get('Kunci_Jawaban')" class="mt-2" />
                    </div>

                    <!-- Deskripsi -->
                    <div class="mt-4">
                        <x-input-label for="{{'Alasan'.$x}}" :value="__('Penjelasan')" />
                        <x-textarea-input id="{{'Alasan'.$x}}" class="block mt-1 w-full" name="{{'Alasan'.$x}}" required > </x-textarea-input>
                        <x-input-error :messages="$errors->get('Alasan')" class="mt-2" />
                    </div>
                @endfor


                <div class="flex items-center justify-end mt-4">
                    <x-button href="{{route('soal',['id'=>$id])}}" class="bg-red-500 hover:bg-red-400 text-white font-bold border-red-700 hover:border-red-500">
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
