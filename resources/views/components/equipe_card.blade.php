<div class="w-[80%] bg-[#3E3F71] rounded-sm py-6 space-y-6 cursor-pointer hover:bg-[#F0F235] transition duration-500 group">
    <div class="rounded-full flex items-center justify-center">
        <img src="{{ asset($equipe['avatar']) }}" alt="icon" class="w-[60%] rounded-full group-hover:border-2 group-hover:border-black">
    </div>
    <div class="h-[50px] text-center px-2">
        <h3 class=" font-semibold text-md text-center text-white group-hover:text-black">{{ $equipe['name'] }}</h3>
        <p class="text-xs text-[#F0F235] text-center font-semibold group-hover:text-[#5E5E5E]">{{ $equipe['role'] }}</p>
    </div>

    <ul class="w-full flex justify-center items-center gap-4 text-2xl">
        <li><a href="{{ $equipe['facebook'] }}"><i class="fa-brands fa-facebook text-white group-hover:text-black"></i></a></li>
        <li><a href="{{ $equipe['github'] }}"><i class="fa-brands fa-github text-white group-hover:text-black"></i></a></li>
        <li><a href="{{ $equipe['linkedin'] }}"><i class="fa-brands fa-linkedin text-white group-hover:text-black"></i></a></li>
    </ul>
</div>
