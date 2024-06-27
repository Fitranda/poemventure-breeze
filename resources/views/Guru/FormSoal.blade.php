<x-app-layout>
        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="btn-modal" class="hidden block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Toggle modal
        </button>

        <!-- Main modal -->

        {{-- <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 {{$jumlah > 0 ?:'hidden'}}"> --}}
            <center>
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Jumlah Soal
                            </h3>
                        </div>
                        <!-- Modal body -->
                        <form method="POST" action="{{ route('soal.jumlah',['id'=>$id]) }}" class="p-4 md:p-5">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Soal</label>
                                    <input type="text" name="jmlsoal" id="jmlsoal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah soal" required="">
                                </div>

                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </center>
        {{-- </div> --}}

    <h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas</h2>
    <div class="flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('soal.store') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-text-input id="id" class="block mt-1 w-full hidden" type="text" name="id" value="{{$id}}" readonly required autofocus />
                    <x-text-input id="jumlahsoal" class="block mt-1 w-full hidden" type="text" name="jumlahsoal" value="{{$jumlah}}" readonly required autofocus />
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

                <div class="soal_container">
                    @for ($x=1;$x<=$jumlah;$x++)
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
                </div>


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
    @Once('scripts')
    <script>
        $(document).ready(function() {
            var jumlah = {{ $jumlah }}+"";
            if (jumlah > 0) {

            }else{
                $('#crud-modal').modal('show');
            }
        });
    </script>
    @endOnce
</x-app-layout>
