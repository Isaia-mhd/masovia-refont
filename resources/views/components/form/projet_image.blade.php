<div class="flex flex-col gap-2 mb-3">
    <label for="image" class="text-white text-xs">Image</label>
    <input type="file" name="image" id="image"
        class="bg-[#CDCEED66] text-white font-semibold cursor-pointer text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]">
    @error('image')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
