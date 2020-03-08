@extends('_layouts.landing')

@section('content')
    <h1 class="font-sans leading-tight tracking-wider uppercase text-4xl md:text-5xl lg:text-6xl">
        <span class="font-bold">Sebastian</span> Wróblewski
    </h1>

    <p class="tracking-widest mt-1 mb-5 text-base md:text-xl lg:text-2xl" id="slogan"
       data-slogans='@json($page->slogans['homepage'])'></p>
@endsection
