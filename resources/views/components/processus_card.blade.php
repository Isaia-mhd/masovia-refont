<div class="w-[80%] h-[100%] bg-[#CDCEED] p-4 rounded-sm">

    <div class="relative bottom-12">
        <div
        class="mx-auto border-4 border-[#CDCEED] bg-[#F0F235] w-[60px] h-[60px] rounded-full flex items-center justify-center">
        <img src="{{ asset($process["icon"]) }}" alt="icon" class="w-5">
    </div>

    <h3 class=" font-semibold text-md text-center">{{ $process["id"] }}. {{ $process["processus"] }}</h3><br>
    <p class="text-xs text-[#737373] text-center">{{ $process["description"] }}</p>
    </div>
</div>
