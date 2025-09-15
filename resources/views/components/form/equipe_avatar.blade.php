<div class="flex flex-col gap-2 mb-3">
    <label for="avatar" class="text-white text-xs">Avatar</label>
    <input type="file" name="avatar" id="avatar"
        class="bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]">
    @error('avatar')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
