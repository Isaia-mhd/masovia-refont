@extends('layouts.child_app')
@section('title')
    Tarifs
@endsection
@section('content')
    <div class="w-full max-w-[60%] md:max-w-[80%] mx-auto bg-cover bg-center bg-[#27283E] pt-16 pb-12">
        <div class="mb-12 text-center">
            <h3 class="text-[#A6A6A6] text-md font-semibold">TARIFS</h3>
            <h2 class="text-[#FFFFFF] text-xl font-semibold">Nos tarifs</h2>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center gap-12 pt-12">
            @foreach ($tarifs as $tarif )
                @include("components.tarif_card", ["tarif" => $tarif])
            @endforeach
        </div>

    </div>
@endsection
