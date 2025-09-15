<div class="flex flex-col gap-2 mb-3">
    <label for="linkedin" class="text-white text-xs">LinkedIn URL</label>
    <input type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $team->linkedin ?? '') }}"
        class="bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]" >
    @error('linkedin')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
