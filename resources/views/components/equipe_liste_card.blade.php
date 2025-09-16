<div class="w-full py-4 bg-[#27283E] rounded-sm px-4 shadow-md shadow-gray-400 cursor-pointer hover:bg-[#F0F235] transition duration-500 flex justify-between items-center group">
    <div class="w-full flex justify-start items-center gap-2 text-sm text-white group-hover:text-black"><img src="{{ asset("storage/" . $team["avatar"]) }}" alt="avatar" class="w-8 h-8  rounded-full"> <p class="font-semibold">{{ $team["name"] }}</p></div>
    <div class="w-full hidden lg:flex justify-start text-xs text-white group-hover:text-black"><p>{{ $team["role"] }}</p></div>
    <div class="w-full flex flex-col justify-end items-end gap-4 text-sm">
        <a href="{{ route("equipe.modifier", $team->id) }}"><i class="fa fa-solid fa-pen text-green-500"></i></a>
        <form action="{{ route("equipe.supprime", $team->id) }}" method="post">
            @csrf
            @method("delete")
            <button type="submit"><i class="fa fa-solid fa-trash text-red-500 cursor-pointer"></i></button>
        </form>
    </div>
</div>

