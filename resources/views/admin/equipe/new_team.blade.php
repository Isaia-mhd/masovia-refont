@extends('layouts.child_app')
@section('title', 'Nouvelle équipe')

@section('content')
    <div class="w-full px-4 sm:px-6 md:px-8 lg:px-12 xl:px-20 max-w-5xl mx-auto bg-[#27283E] pt-12 pb-10">
        <div class="mb-10 text-center">
            <h3 class="text-[#A6A6A6] text-sm sm:text-base font-semibold uppercase">ÉQUIPES</h3>
            <h2 class="text-white text-xl font-semibold">Ajouter une nouvelle équipe</h2>
        </div>

        <div class="w-full bg-[#27283E] shadow-2xl shadow-[#17182c] rounded-lg px-4 sm:px-8 lg:px-12 py-6">
            <h2 class="text-white text-xl sm:text-2xl mb-1">Ajouter une équipe</h2>
            <p class="text-[#C0C0C0] text-xs sm:text-sm mb-4">
                Complétez les informations ci-dessous pour créer une nouvelle équipe dans l’application.
            </p>

            {{-- Success message --}}
            @if (session()->has('success'))
                <p class="text-green-500 font-medium text-sm sm:text-base mb-4">{{ session('success') }}</p>
            @endif


            <form class="mt-4 grid grid-cols-1 lg:grid-cols-2 gap-6" method="POST" action="{{ route('equipe.enregistre') }}" enctype="multipart/form-data">
                @csrf
                @include('components.form.equipe_name')
                @include('components.form.equipe_role')
                @include('components.form.equipe_facebook')
                @include('components.form.equipe_github')
                @include('components.form.equipe_linkedin')
                @include('components.form.equipe_avatar')


                <div class="col-span-1 lg:col-span-2 pt-4">
                    <button type="submit"
                        class="w-full sm:w-auto bg-[#F0F235] text-black text-sm font-semibold px-6 py-2 cursor-pointer rounded-md hover:bg-yellow-300 transition">
                        Enregistrer
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
