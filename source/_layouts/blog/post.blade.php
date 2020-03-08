@extends('_layouts.blog')

@section('content.outer')
    <section class="font-sans text-center px-6">
        <h1 class="mt-8 mb-4 text-3xl font-medium">{{ $page->title }}</h1>

        @if (count($tags) > 0)
            <div class="justify-center text-sm items-start">
                <ul>
                    @foreach ($page->tags as $tag)
                        <li class="inline">
                            <a href="/blog/tags/{{ $tag }}" class="hover:text-orange-500">{{ '#' . $tag }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>

    <section class="text-center mt-4">
        @yield('content')
    </section>
@endsection
