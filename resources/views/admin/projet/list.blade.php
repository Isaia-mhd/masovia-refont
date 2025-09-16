@extends('layouts.child_app')
@section('title', 'Nouveau Projet')

@section('content')
    <div class="w-full px-4 sm:px-6 md:px-8 lg:px-12 xl:px-20 max-w-5xl mx-auto bg-[#27283E] pt-12 pb-10">
        <div class="mb-10 text-center">
            <h3 class="text-[#A6A6A6] text-sm sm:text-base font-semibold uppercase">PROJETS</h3>
            <h2 class="text-white text-xl font-semibold">Toutes les réalisations de Masovia</h2>
        </div>

        <div class="w-full bg-[#27283E] shadow-2xl shadow-[#17182c] rounded-lg px-4 sm:px-8 lg:px-12 py-6 ">
            <h2 class="text-white text-xl sm:text-2xl mb-1">Liste des projets réalisés</h2>
            <p class="text-[#C0C0C0] text-xs sm:text-sm mb-4">
                Voici la liste des projets réalisés par Masovia Madagascar.
            </p>

            {{-- Success message --}}
            @if (session()->has('success'))
                <p class="text-green-500 font-medium text-sm sm:text-base mb-4">{{ session('success') }}</p>
            @endif
            <div class="space-y-1">
                @foreach ($projects as $project)
                    @include('components.projet_liste_card', ['project' => $project])
                @endforeach
            </div>
        </div>

        <div class="w-12 h-12 flex justify-center items-center rounded-full bg-[#F0F235] fixed bottom-10 right-10">
            <a href="{{ route("projet.nouveau") }}"><i class="fa fa-solid fa-add text-gray-slate-700 font-bold"></i></a>
        </div>
    </div>
@endsection
