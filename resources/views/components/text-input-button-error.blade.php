<button {!! $attributes->merge(['class' => 'w-full relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-500 to-red-500 group-hover:from-red-500 group-hover:to-red-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800']) !!}>
    <span class="text-wrap w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-red dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
   {{$slot}}
    </span>
</button>
