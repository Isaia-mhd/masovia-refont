<div class="flex flex-col gap-2 mb-3">
    <div class="w-full flex flex-col lg:flex-row justify-start items-start lg:items-center gap-3 rounded">
        <div class="w-full lg:w-1/2">
            <label for="unite" class="text-white text-xs mb-1 block">Unité</label>
            <select name="unite" id="unite"
                class="w-full bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm outline-none focus:border-2 focus:border-[#F0F235]">
                <option value="EUR" selected>Euro</option>
                <option value="USD">Dollar</option>
                <option value="mga">MGA</option>
            </select>
        </div>
        <div class="w-full lg:w-1/2">
            <label for="budget" class="text-white text-xs mb-1 block">Votre budget</label>
            <input type="number" name="budget" id="budget" min="1"
                class="w-full bg-[#CDCEED66] text-black text-xs py-3 px-3 rounded-sm outline-none focus:border-2 focus:border-[#F0F235]">
        </div>

    </div>
    @error('budget')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
