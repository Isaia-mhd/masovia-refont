<div class="flex flex-col gap-2 mb-3">
    <div class="w-full flex flex-col lg:flex-row justify-start items-start lg:items-center gap-3 rounded">
        <div class="w-full lg:w-1/2">
            <label for="date_unit" class="text-white text-xs mb-1 block">Unité de date</label>
            <select name="unite_de_date" id="date_unit"
                class="w-full bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm outline-none focus:border-2 focus:border-[#F0F235]">
                <option value="jours">Jour</option>
                <option value="mois" selected>Mois</option>
                <option value="annee">Année</option>
            </select>
        </div>
        <div class="w-full lg:w-1/2">
            <label for="duree" class="text-white text-xs mb-1 block">Durée</label>
            <input type="number" name="duree" id="duree" min="1"
                class="w-full bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm outline-none focus:border-2 focus:border-[#F0F235]">
        </div>

    </div>
    @error('duree')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
