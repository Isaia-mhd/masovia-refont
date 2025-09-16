<div class="flex flex-col gap-2 mb-3">
    <label for="nom" class="text-white text-xs">Nom</label>
    <input type="text" name="nom" id="nom"
        class="bg-[#CDCEED66] text-white font-semibold text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]"
        placeholder="Melanie">
    @error('nom')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
