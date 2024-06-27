<x-app-layout>


<h2 class="text-4xl font-bold text-white" style="text-align: center">Daftar Soal</h2>

<a href="{{route('soal.crete',['id'=>$kelas->id])}}" class="mt-4 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
    Tambah
</a>

<div class="bg-white shadow-md rounded my-6 overflow-x-auto">
    <table class="w-full table-auto">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">No</th>
                <th class="py-3 px-6 text-left">Bab</th>
                <th class="py-3 px-6 text-left">Soal</th>
                <th class="py-3 px-6 text-left">Pilhan A</th>
                <th class="py-3 px-6 text-left">Pilhan B</th>
                <th class="py-3 px-6 text-left">Pilhan C</th>
                <th class="py-3 px-6 text-left">Pilhan D</th>
                <th class="py-3 px-6 text-left">Penjelasan</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach ($data as $item)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$loop->iteration}}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$item->BAB}}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$item->Soal}}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$item->jawaban1}}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$item->jawaban2}}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$item->jawaban3}}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$item->jawaban4}}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$item->Alasan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
<x-button href="{{ route('kelasguru') }}" class="bg-red-500 hover:bg-red-400 text-white font-bold border-red-700 hover:border-red-500">
    {{ __('Kembali') }}
</x-button>

</x-app-layout>
