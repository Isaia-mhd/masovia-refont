<div
    class="w-[100%] text-white bg-[#585980] rounded-md py-6 cursor-pointer space-y-10 px-6 hover:bg-[#F0F235] hover:text-black group transition duration-500">
    <div class="h-[50px] text-center">
        <p class="text-2xl text-start font-semibold">{{ $tarif['category'] }}</p>
        <h3 class=" font-normal text-xs text-start">{{ $tarif['description'] }}</h3>
        <p class="border-dashed border-1 border-gray-500 mt-3"></p>
    </div>
    <div class="w-full">
        <p class="text-2xl font-semibold text-start">
            €{{ $tarif['type']['month'] }} / mois
        </p>
    </div>
    <div
        class="w-full text-center bg-[#585980] border-1 border-gray-300 rounded-md py-3 group-hover:!bg-black group-hover:text-white group-hover:border-none">
        <a href="" class="w-full py-3 px-[10%] ">Planifier une démo</a>
    </div>

    <ul class="w-full text-sm space-y-2">
        @foreach ($tarif['baseTask'] as $task)
            <li class="w-full flex justify-start items-center gap-4">
                <i class="fa-solid fa-check"></i>
                <p>{{ $task }}</p>
            </li>
        @endforeach
    </ul>
</div>
