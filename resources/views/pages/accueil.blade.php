@extends('layouts.app')
@section('title')
    Accueil
@endsection
@section('body')
    <div class="w-full relative h-screen bg-cover bg-center shadow-lg"
        style="background-image: url('{{ asset('images/home.png') }}')">
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative w-full">
            @include('components.header')
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-screen text-center text-white px-4">
            <div class="w-[60%] flex flex-col justify-center items-center">
                <p class="text-sm md:text-sm mb-4">Des solutions IT personnalisées pour booster votre performance.</p>

                <h2 class="text-3xl md:text-5xl font-bold mb-6">MASOVIA Madagascar, l’innovation sur mesure.</h2>

                <div class="mt-10">
                    <a href="" class="bg-[#F0F235] hover:bg-[#c9cc0c] transition duration-150 text-black font-bold py-3 px-6 rounded-full">
                        En savoir plus <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
