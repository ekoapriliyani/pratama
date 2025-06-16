@extends('layouts.app')

@section('content')
    @include('components.hero')

    <!-- Konten lain -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="row text-center">
                <a href="#about"
                    class="inline-block px-4 py-2 border-2 border-red-600 text-red-600 font-semibold rounded-md hover:bg-red-600 hover:text-white hover:scale-105 transition-all duration-300 ease-in-out">
                    ABOUT US
                </a>

            </div>
            <br><br>

            {{-- <h2 class="text-3xl font-bold text-center text-primary mb-12">TENTANG KAMI</h2> --}}
            @include('components.about')
        </div>
    </section>
@endsection
