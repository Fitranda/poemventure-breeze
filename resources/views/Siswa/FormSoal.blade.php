<x-app-layout>
    <h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas</h2>
    <div class="flex flex-col sm:justify-center items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="GET" id="formsoal" action="{{route('map',['id'=>1])}}">
                @csrf
                <input id="no-bag" type="text" class="hidden" value="1">

                @for ($x=1;$x<=5;$x++)
                <div id="{{"soalbag".$x}}" class="hidden">
                    <div class="mt-4">
                        <x-input-label for="{{'no_soal'.$x}}" :value="__('no_soal')" />
                        <x-text-input id="{{'no_soal'.$x}}" class="block mt-1 w-full" type="text" name="{{'no_soal'.$x}}" value="{{$x}}" readonly  required autofocus />
                        <x-input-error :messages="$errors->get('no_soal')" class="mt-2" />
                    </div>

                    <!-- Deskripsi -->
                    <div class="mt-4">
                        <x-input-label for="{{'Soal'.$x}}" :value="__('Soal '.$x)" />
                        <x-textarea-input id="{{'Soal'.$x}}" class="block mt-1 w-full h-auto" name="{{'Soal'.$x}}" readonly required >{{$data[$x-1]->Soal}} </x-textarea-input>
                        <x-input-error :messages="$errors->get('Soal')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-text-input-button type="button" id="{{'jawaban1'.$x}}" class="jawab" name="{{'jawaban1'.$x}}">{{$data[$x-1]->jawaban1}}</x-text-input-button>
                        <x-input-error :messages="$errors->get('jawaban1')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-text-input-button type="button" id="{{'jawaban2'.$x}}" class="jawab" name="{{'jawaban2'.$x}}">{{$data[$x-1]->jawaban2}}</x-text-input-button>
                    </div>

                    <div class="mt-4">
                        <x-text-input-button type="button" id="{{'jawaban3'.$x}}" class="jawab" name="{{'jawaban3'.$x}}">{{$data[$x-1]->jawaban3}}</x-text-input-button>
                        <x-input-error :messages="$errors->get('jawaban3')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-text-input-button type="button" id="{{'jawaban4'.$x}}" class="jawab" name="{{'jawaban4'.$x}}">{{$data[$x-1]->jawaban4}}</x-text-input-button>
                        <x-input-error :messages="$errors->get('jawaban4')" class="mt-2" />
                    </div>

                    <!-- Deskripsi -->
                    <div class="mt-4 hidden">
                        <x-input-label for="{{'Alasan'.$x}}" :value="__('Penjelasan')" />
                        <x-textarea-input id="{{'Alasan'.$x}}" class="block mt-1 w-full" name="{{'Alasan'.$x}}" required >{{$data[$x-1]->Alasan}} </x-textarea-input>
                        <x-input-error :messages="$errors->get('Alasan')" class="mt-2" />
                        <button class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"" id="{{"next".$x}}">Next</button>
                    </div>
                </div>

                @endfor


                <div class="flex items-center justify-end mt-4 hidden">
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
            console.log("masuk");
            getsoal();
        });

        function getsoal() {
            var no = $('#no-bag').val();
            console.log(no,"no")
            $('#soalbag'+no).removeClass('hidden');
        }

        $(".jawab").click(function(){
            console.log("safmasfnasl");
            var no = $('#no-bag').val();
            $('#no-bag').val(parseInt(no)+1);
            for (let i = 1; i <= 5; i++) {
                $('#soalbag'+no).removeClass('hidden');
                $('#soalbag'+no).addClass('hidden');
            }
            if (no == 5) {
                $('#formsoal').submit();
            }else{
                getsoal();
            }
        });
    </script>
@endOnce
</x-app-layout>
