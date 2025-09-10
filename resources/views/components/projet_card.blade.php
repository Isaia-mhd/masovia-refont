<div class="w-[80%] bg-[#CDCEED] rounded-sm pb-6">

    <div class="rounded-full flex items-center justify-center">
        <img src="{{ asset($projet['image']) }}" alt="icon" class="w-full">
    </div>
    <div class="h-[50px] flex items-center justify-center px-2">
        <h3 class=" font-semibold text-md text-center">{{ $projet['name'] }}</h3>
    </div>
    <div class="h-[100px] px-10">
        <p class="text-xs text-[#737373] text-center">{{ $projet['description'] }}</p>
    </div>

    <div class="w-full flex justify-center">
        <a href="" class="bg-[#3E3F71] text-white rounded-full py-2 text-center px-4">En savoir plus</a>
    </div>
</div>
