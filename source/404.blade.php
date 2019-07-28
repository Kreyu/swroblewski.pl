@extends('_layouts.master')

@section('content')

<main class="main">
    <h1 class="font-sans tracking-wider uppercase text-xl sm:text-4xl md:text-5xl lg:text-6xl">
        <span class="font-bold">404</span>
    </h1>

    <p class="tracking-widest mt-1 mb-5 text-sm sm:text-base md:text-xl lg:text-2xl" id="slogan"
       data-slogans='@json($page->slogans['notFound'])'></p>

    <section class="sm:m-2 lg:m-6 tracking-widest text-gray-500 hover:text-gray-600 transition-faster text-sm sm:text-base md:text-xl">
        <p><a href="/">Return to safety</a></p>
    </section>
</main>

@endsection
