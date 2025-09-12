<div class="w-[300px] text-white flex justify-start items-start gap-3 mb-6">
    <div class="w-[15%] rounded-full flex justify-start items-start">
        <img src="{{ asset($tech["image"]) }}" alt="">
    </div>
    <div class="w-[60%] space-y-2">
        <p class="text-lg font-semibold">{{ $tech["name"] }}</p>
        <p class="text-sm text-[#BBBBBB]">{{ $tech["description"] }}</p>
    </div>
</div>
