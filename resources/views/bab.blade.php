<x-body-layout>
    <div class="relative overflow-hidden mx-auto">
        <img src="{{ asset('img/paper.png') }}" class="mx-auto opacity-55 object-cover" style="width: 95pc; height: 42pc" alt="">
        <textarea name="" id="" class="absolute inset-0 mx-auto text-center bg-transparent border-none  " style="width: 65%; height: 80%; top: 50%; transform: translateY(-50%);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ex possimus a itaque inventore perspiciatis cumque quis voluptatem laborum optio quasi, similique doloribus? Labore perferendis, dolore commodi nemo distinctio repellat?</textarea>
    </div>
    <div class="relative mx-auto">
        <div class="absolute bottom-0 left-0 right-0 mx-auto text-center">
            <<form action="/submit" method="post" class="absolute bottom-0 left-0 right-0 mx-auto text-center">
                <button name="answer" value="1" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Jawaban 1</button>
                <button name="answer" value="2" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Jawaban 2</button>
                <button name="answer" value="3" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Jawaban 3</button>
                <button name="answer" value="4" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Jawaban 4</button>
            </form>
        </div>
    </div>
</x-body-layout>
