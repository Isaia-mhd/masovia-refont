<div class="flex flex-col gap-2 mb-3">
    <label for="role" class="text-white text-xs">Role d'équipe</label>
    <input type="text" name="role" id="role" value="{{ old('role', $team->role ?? '') }}"
        class="bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]">
    @error('role')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
