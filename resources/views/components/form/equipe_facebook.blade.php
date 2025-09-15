<div class="flex flex-col gap-2 mb-3">
    <label for="facebook" class="text-white text-xs">Facebook URL</label>
    <input type="text" name="facebook" id="facebook" value="{{ old('facebook', $team->facebook ?? '') }}"
        class="bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]" >
    @error('facebook')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
