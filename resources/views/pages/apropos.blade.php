@extends('layouts.child_app')
@section('title')
    A propos de nous
@endsection
@section('content')
    <div class="w-full  max-w-[60%] md:max-w-[80%] mx-auto bg-cover bg-center shadow-lg bg-[#27283E]">
        <div class=" space-y-5 md:flex justify-center items-center space-x-8 py-16">
            <img src="{{ asset('/images/apropos.png') }}" alt="apropos" class="md:w-[300px]">
            <div class="">
                <h3 class="text-[#A6A6A6] text-sm">À PROPOS</h3>
                <h2 class="text-[#FFFFFF] text-lg font-semibold">Notre Start-Up</h2>
                <p class="text-[#FFFFFF] text-sm pt-6">Basée à Antananarivo, Masovia Madagascar conçoit des solutions
                    informatiques sur mesure. Notre équipe passionnée accompagne ses clients dans la gestion complète de leurs
                    projets technologiques, en proposant des solutions innovantes et adaptées qui visent à dépasser leurs
                    attentes et assurer leur succès.</p>
            </div>

        </div>
    </div>
    </div>
@endsection
