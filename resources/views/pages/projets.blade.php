@extends('layouts.child_app')
@section('title')
    Projets réalisés
@endsection
@section('content')
    <div class="w-full max-w-[60%] md:max-w-[80%] mx-auto bg-cover bg-center bg-[#27283E] pt-16 pb-12">
        <div class="mb-12 text-center">
            <h3 class="text-[#A6A6A6] text-md font-semibold">PROJETS</h3>
            <h2 class="text-[#FFFFFF] text-xl font-semibold">Nos réalisations</h2>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center gap-12 pt-12">
            @foreach ($projets as $projet )
                @include("components.projet_card", ["projet" => $projet])
            @endforeach
        </div>

    </div>
@endsection
