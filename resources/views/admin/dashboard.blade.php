@extends('layouts.admin')
@section('title', 'Dashboard')
@section('main')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

        <div class="bg-[#27283E] shadow-md p-4 rounded shadow-gray-500 hover:bg-[#F0F235] transition duration-500 ease-in-out cursor-pointer group">
            <h2 class="text-xs text-white font-semibold mb-2">Equipes</h2>
            <p class="text-[#F0F235] group-hover:text-black text-2xl font-semibold">{{ count($equipes) }}</p>
        </div>

        <div class="bg-[#27283E] shadow-md p-4 rounded shadow-gray-500 hover:bg-[#F0F235] transition duration-500 ease-in-out cursor-pointer group">
            <h2 class="text-xs text-white font-semibold mb-2">Projects</h2>
            <p class="text-[#F0F235] group-hover:text-black text-2xl font-semibold">{{ count($projets) }}</p>
        </div>

        {{-- <div class="bg-[#27283E] shadow-md p-4 rounded shadow-gray-500 hover:bg-[#F0F235] transition duration-500 ease-in-out cursor-pointer group">
            <h2 class="text-xs text-white font-semibold mb-2">Revenue</h2>
            <p class="text-[#F0F235] group-hover:text-black text-2xl font-semibold">$5,200</p>
        </div> --}}

    </div>
@endsection
