<div class="w-[80%] bg-[#3E3F71] rounded-sm py-6 space-y-6">

    <div class="rounded-full flex items-center justify-center">
        <img src="{{ asset($equipe['avatar']) }}" alt="icon" class="w-[60%]">
    </div>
    <div class="h-[50px] text-center px-2">
        <h3 class=" font-semibold text-md text-center text-white">{{ $equipe['name'] }}</h3>
        <p class="text-xs text-[#F0F235] text-center font-semibold">{{ $equipe['role'] }}</p>
    </div>
    {{-- <div class="h-[100px] px-10">
        <p class="text-xs text-[#F0F235] text-center font-semibold">{{ $equipe['role'] }}</p>
    </div> --}}

    <ul class="w-full flex justify-center items-center gap-4 text-2xl">
        <li><a href="{{ $equipe['facebook'] }}"><i class="fa-brands fa-facebook text-white"></i></a></li>
        <li><a href="{{ $equipe['github'] }}"><i class="fa-brands fa-github text-white"></i></a></li>
        <li><a href="{{ $equipe['linkedin'] }}"><i class="fa-brands fa-linkedin text-white"></i></a></li>
    </ul>
</div>
