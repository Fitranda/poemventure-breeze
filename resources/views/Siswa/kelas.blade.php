<x-app-layout>


<h2 class="text-4xl font-bold text-white" style="text-align: center">Kelas</h2>

<a href="{{route('tambahkelassiswa')}}" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
    Tambah
</a>

<div class="tes flex flex-wrap my-4">
    @foreach ($data as $item)
        <div class="mx-1 basis-1/3 my-2.5 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{route('prolog',['id'=>$item->id])}}">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$item->Nama}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{$item->Deskripsi}}</p>
            <a href="{{route('prolog',['id'=>$item->id])}}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                {{$item->kode_kelas}}
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                </svg>
            </a>
        </div>
    @endforeach

</div>

</x-app-layout>
