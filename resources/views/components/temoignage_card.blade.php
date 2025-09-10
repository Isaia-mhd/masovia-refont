<div class="w-[80%] rounded-sm pb-6 space-y-6 py-2 px-4">
    <div class="w-full flex justify-center items-start">
        <img src="{{ asset("/images/apostrophe.png") }}" alt="icon" class="w-5 h-5">
    </div>
    <div class="h-[100px] mb-3 ">
        <p class=" font-semibold text-sm text-center text-[#BBBBBB]">{{ $temoignage['message'] }}</p>
    </div>
    <div class="space-y-1">
        <h3 class="text-md text-white text-center font-semibold">{{ $temoignage['name'] }}</h3>
        <p class="text-sm text-[#BBBBBB] text-center font-semibold">{{ $temoignage['role'] }}</p>
    </div>
</div>
