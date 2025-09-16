<div class="w-full py-4 bg-[#27283E] rounded-sm px-4 shadow-md shadow-gray-400 cursor-pointer group hover:bg-[#F0F235] transition duration-500 flex justify-between items-center">
    <div class="w-full flex justify-start items-center gap-2 text-sm text-white group-hover:text-black mr-8"><img src="{{ asset("storage/" . $project["image"]) }}" alt="image" class="w-8 h-8 rounded-full"> <p class="font-semibold">{{ $project["name"] }}</p></div>
    <div class="w-full hidden lg:flex justify-start text-xs text-white truncate group-hover:text-black"><p>{{ $project["description"] }}</p></div>
    <div class="w-full flex flex-col justify-end items-end gap-4 text-sm">
        <a href="{{ route("projet.modifier", $project->id) }}"><i class="fa fa-solid fa-pen text-green-500"></i></a>
        <form action="{{ route("projet.supprime", $project->id) }}" method="post">
            @csrf
            @method("delete")
            <button type="submit"><i class="fa fa-solid fa-trash text-red-500 cursor-pointer"></i></button>
        </form>
    </div>
</div>

