<x-body-layout>
    <div class="flex justify-center">
        <div class="relative">
            <img src="{{ asset('img/paper.png') }}" class="opacity-55 w-full" alt="">
            <textarea class="absolute top-0 left-1/2 transform -translate-x-1/2 mt-4 w-11/12 p-2 bg-transparent border-none text-2xl text-center z-10" rows="10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad rerum blanditiis incidunt, ut alias, natus quasi accusantium id explicabo facere porro dignissimos velit ducimus aliquam ipsam similique fugiat aspernatur voluptate!</textarea>
        </div>
    </div>
    <div class="mx-auto mt-10">
        <div class="bottom-0 left-0 right-0 mx-auto text-center">
            <<form action="/submit" method="post" class="bottom-0 left-0 right-0 mx-auto text-center">
                <button name="answer" value="1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Jawaban 1</button>
                <button name="answer" value="2" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Jawaban 2</button>
                <button name="answer" value="3" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Jawaban 3</button>
                <button name="answer" value="4" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Jawaban 4</button>
            </form>
        </div>
    </div>
</x-body-layout>
