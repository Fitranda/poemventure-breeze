<x-app-layout>
    <div class="flex justify-center">
        <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('img/charl.png') }}" alt="">
            @foreach ($data as $item)
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 ml-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white uppercase">{{ $item['Nama'] }}</h5>
                    <h5 class="mb-2 ml-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item['Kelas'] }}</h5>
                    <hr>
                    <div class="flex flex-wrap items-center mt-2 mb-2 ml-2">
                        <div class="w-full">
                            <span class="text-md text-gray-600 dark:text-gray-400">Experience Point (EXP) : </span>
                            <div class="w-full bg-gray-200 h-2.5 rounded-full dark:bg-gray-700">
                                <div class="bg-blue-300 h-2.5 rounded-full" style="width: {{ ($item['EXP'] / 100 * 100) }}%"></div>
                            </div>
                            <h4 class="mt-2">{{ $item['EXP'] }} / 100</h4>
                        </div>


                        <div class="mt-2 w-full">
                            <span class="text-md text-gray-600 dark:text-gray-400">Health Point (HP) : </span>
                            <div>
                                <div class="w-full bg-gray-200 h-2.5 rounded-full dark:bg-gray-700">
                                    <div class="bg-red-300 h-2.5 rounded-full" style="width: {{ ($item['HP'] / 5 * 100) }}%"></div>
                                </div>
                                <h4 class="mt-2">{{ $item['HP'] }} / 5</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </a>
    </div>
</x-app-layout>
