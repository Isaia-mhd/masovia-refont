<div class="flex flex-col gap-2 mb-3">
    <label for="service" class="text-white text-xs">Description</label>
    <textarea name="description" id=""
        class="bg-[#CDCEED66] h-20 text-white font-semibold text-xs py-3 px-3 rounded-sm  outline-none focus:border-1 focus:border-[#F0F235]"
        placeholder="Bla bla bla">{{ old('description', $project->description ?? '') }}</textarea>
    @error('description')
        <span class="text-red-600 text-xs">{{ $message }}</span>
    @enderror
</div>
