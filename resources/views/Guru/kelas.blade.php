<x-app-layout>


<h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas</h2>

<a href="{{route('tambahkelasguru')}}" class="mt-4 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
    Tambah
</a>

<div class="tes flex flex-wrap my-4">
    @foreach ($data as $item)
        <div class="mx-1 basis-1/3 my-2.5 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{route('detailkelasguru',['id'=>$item->id])}}">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$item->Nama}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{$item->Deskripsi}}</p>
            <a href="{{route('detailkelasguru',['id'=>$item->id])}}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                {{$item->kode_kelas}}
            </a>
            <br>
            <a href="{{route('soal',['id'=>$item->id])}}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                Daftar Soal
            </a>
            <br>
            <a href="{{route('detailkelasguru',['id'=>$item->id])}}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                Daftar Siswa
            </a>
        </div>
    @endforeach

</div>

</x-app-layout>
