<div class="w-[80%] h-10 bg-white rounded-sm px-4 shadow-lg shadow-gray-400 cursor-pointer hover:bg-[#F0F235] transition duration-500 flex justify-between items-center">
    <div class="w-full flex justify-start items-center gap-2 text-sm text-slate-700"><img src="{{ asset("storage/" . $team["avatar"]) }}" alt="avatar" class="w-8 h-8"> <p class="font-semibold">{{ $team["name"] }}</p></div>
    <div class="w-full flex justify-start text-xs text-slate-700"><p>{{ $team["role"] }}</p></div>
    <div class="w-full flex justify-end items-center gap-4 text-sm">
        <a href="{{ route("equipe.modifier", $team->id) }}"><i class="fa fa-solid fa-pen text-green-500"></i></a>
        <form action="{{ route("equipe.supprime", $team->id) }}" method="post">
            @csrf
            @method("delete")
            <button type="submit"><i class="fa fa-solid fa-trash text-red-500 cursor-pointer"></i></button>
        </form>
    </div>
</div>

