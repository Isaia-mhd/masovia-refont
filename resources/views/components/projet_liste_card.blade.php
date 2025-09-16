<div class="w-[80%] h-10 bg-white rounded-sm px-4 shadow-lg shadow-gray-400 cursor-pointer hover:bg-[#F0F235] transition duration-500 flex justify-between items-center">
    <div class="w-full flex justify-start items-center gap-2 text-sm text-slate-700"><img src="{{ asset("storage/" . $project["image"]) }}" alt="image" class="w-8 h-8"> <p class="font-semibold">{{ $project["name"] }}</p></div>
    <div class="w-full flex justify-start text-xs text-slate-700 truncate"><p>{{ $project["description"] }}</p></div>
    <div class="w-full flex justify-end items-center gap-4 text-sm">
        <a href="{{ route("projet.modifier", $project->id) }}"><i class="fa fa-solid fa-pen text-green-500"></i></a>
        <form action="{{ route("projet.supprime", $project->id) }}" method="post">
            @csrf
            @method("delete")
            <button type="submit"><i class="fa fa-solid fa-trash text-red-500 cursor-pointer"></i></button>
        </form>
    </div>
</div>

