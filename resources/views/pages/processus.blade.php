@extends('layouts.child_app')
@section('title')
    Notre processus
@endsection
@section('content')
    <div class="w-full max-w-[60%] md:max-w-[80%] mx-auto bg-cover bg-center shadow-lg bg-[#27283E] pt-16 pb-12">
        <div class="mb-12 text-center">
            <h3 class="text-[#A6A6A6] text-md font-semibold">PROCESSUS</h3>
            <h2 class="text-[#FFFFFF] text-xl font-semibold">Quels sont nos processus ?</h2>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-3 justify-items-center gap-12 pt-12">
            @foreach ($processus as $process )
                @include("components.processus_card", ["process" => $process])
            @endforeach
        </div>

    </div>
@endsection
