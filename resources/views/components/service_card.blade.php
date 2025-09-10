<div class="w-full h-[250px] bg-[#CDCEED] hover:bg-[#F0F235] transition duration-500 cursor-pointer rounded-md flex flex-col justify-center items-center gap-2 px-2">
    <img src="{{ asset($service['icon']) }}" alt="icon" class="">
    <h3 class="text-sm text-center font-semibold text-black">{{ $service["service"] }}</h3>
    <p class="text-xs text-center text-[#797BA5]">{{ $service["description"] }}</p>
</div>

{{--
<i class="fa-solid fa-laptop-code"></i>
<i class="fa-solid fa-mobile-screen"></i>
--}}
