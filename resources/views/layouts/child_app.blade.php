@extends('layouts.app')
@section('body')
    <div class="bg-[#27283E]">
        @include('components.header')
    </div>
    <section class="bg-[#27283E]">
        @yield('content')
    </section>
    <div class="bg-[#27283E]">
        @include('components.footer')
    </div>
@endsection
