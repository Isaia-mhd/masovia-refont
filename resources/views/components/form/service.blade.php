<div class="flex flex-col gap-2 mb-3">
    <label for="service" class="text-white text-xs">Service</label>
    <textarea name="service" id=""
        class="bg-[#CDCEED66] h-20 text-black text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]"
        placeholder="Pro"></textarea>
    @error('service')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
