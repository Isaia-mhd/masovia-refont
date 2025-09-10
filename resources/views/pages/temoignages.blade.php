@extends('layouts.child_app')
@section('title')
    Témoignages
@endsection
@section('content')
    <div class="w-full max-w-[60%] md:max-w-[80%] mx-auto bg-cover bg-center bg-[#27283E] pt-16 pb-12">
        <div class="mb-12 text-center">
            <h3 class="text-[#A6A6A6] text-md font-semibold">TÉMOIGNAGES</h3>
            <h2 class="text-[#FFFFFF] text-xl font-semibold">Ce que disent nos clients</h2>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center gap-12 pt-12">
            @foreach ($temoignages as $temoignage )
                @include("components.temoignage_card", ["temoignage" => $temoignage])
            @endforeach
        </div>

    </div>
@endsection
