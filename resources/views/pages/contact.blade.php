@extends('layouts.child_app')
@section('title')
    Contactez-nous
@endsection
@section('content')
    <div class="w-full max-w-[80%] mx-auto bg-cover bg-center pt-16 pb-12 lg:flex justify-between gap-24">
        <div class="w-full px-8 py-6">
            <h3 class="text-white text-2xl">Entrer en contact</h3>
            <h2 class="text-[#C0C0C0] text-xs">Contactez-nous dès maintenant pour toute question ou collaboration, nous
                sommes à votre écoute.</h2>
            <hr class="border-gray-500 mt-3">
            <div class="mt-6">
                @foreach ($contacts as $contact)
                    <div class="text-white flex justify-start items-center gap-3 mb-6">
                        <div
                            class="w-[40px] h-[40px] rounded-full {{ $contact['bgColor'] }} flex justify-center items-center">
                            <i class="{{ $contact['icon'] }} text-white text-xl p-2"></i>
                        </div>
                        <div class="">
                            <p class="text-lg font-semibold">{{ $contact['type'] }}</p>
                            <p class="text-sm">{{ $contact['value'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr class="border-gray-500">
            <div class="w-full space-y-3 mt-6">
                <p class="text-lg font-semibold text-white">Suivez nos réseaux sociaux</p>
                <ul class="flex justify-start items-center gap-3 text-[#CDCEED] text-2xl">
                    <li><a href=""><i class="fa-brands fa-facebook"></a></i></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-square-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="w-full bg-[#27283E] shadow-2xl shadow-[#17182c] pl-8 pr-8 lg:pr-24 py-6 rounded-sm">
            <h2 class="text-white text-2xl">Envoyer un message</h2>
            <p class="text-[#C0C0C0] text-xs">
                Envoyez-nous un message, nous répondrons rapidement à vos besoins.
            </p>
            @if (session()->has("success"))
                <p class="text-green-600 font-semibold text-sm pt-6">{{ session("success") }}</p>
            @endif
            <form class="mt-6" method="POST" action="{{ route('email') }}">
                @csrf
                @include("components.form.nom")
                @include("components.form.email")
                @include("components.form.service")
                @include("components.form.duree")
                @include("components.form.budget")
                @include("components.form.btn_submit")
            </form>
        </div>
    </div>
@endsection
