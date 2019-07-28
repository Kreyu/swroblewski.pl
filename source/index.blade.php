@extends('_layouts.master')

@section('content')

<main class="main">
    <h1 class="font-sans tracking-wider uppercase text-xl sm:text-4xl md:text-5xl lg:text-6xl">
        <span class="font-bold">Sebastian</span> Wróblewski
    </h1>

    <p class="tracking-widest mt-1 mb-5 text-sm sm:text-base md:text-xl lg:text-2xl" id="slogan"
       data-slogans='@json($page->slogans['homepage'])'></p>

    <section class="sm:m-2 lg:m-6 text-xl sm:text-2xl">
        <ul class="flex justify-between">
            <li class="mx-3 hover:text-gray-600 transition-faster">
                <a href="mailto:kontakt@swroblewski.pl">
                    <i class="icon-envelope"></i>
                </a>
            </li>
            <li class="mx-3 hover:text-gray-600 transition-faster">
                <a href="https://github.com/Kreyu">
                    <i class="icon-github-alt"></i>
                </a>
            </li>
            <li class="mx-3 hover:text-gray-600 transition-faster">
                <a href="https://telegram.me/Kreyu">
                    <i class="icon-telegram-plane"></i>
                </a>
            </li>
        </ul>
    </section>
</main>

@endsection
