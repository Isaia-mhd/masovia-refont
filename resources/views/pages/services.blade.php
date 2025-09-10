@extends('layouts.child_app')
@section('title')
    Nos Services
@endsection
@section('content')
    <div class="w-full max-w-[60%] md:max-w-[80%] mx-auto bg-cover bg-center shadow-lg bg-[#27283E] md:flex justify-center items-center gap-20 pt-16 pb-12">
        <div class="mb-12">
            <h3 class="text-[#A6A6A6] text-md font-semibold">SERVICES</h3>
            <h2 class="text-[#FFFFFF] text-xl font-semibold">Nos Services</h2>
            <p class="text-[#FFFFFF] text-md pt-16">On propose une large gamme de services IT, incluant développement web et
                mobile, design UI/UX, ainsi que l’administration sécurisée des réseaux et systèmes. </p>

            <p class="text-[#FFFFFF] text-md pt-6">Nous créons des solutions performantes et intuitives pour accompagner la
                croissance et la réussite de votre entreprise.</p>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6 justify-items-center items-center">
            @foreach ($services as $service)
                @include('components.service_card', ["service" => $service])
            @endforeach
        </div>

    </div>
@endsection
