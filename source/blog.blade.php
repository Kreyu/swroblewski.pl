@extends('_layouts.blog')

@section('body')
    <section class="font-sans text-center px-6">
        <h1 class="mt-8 mb-4 text-3xl font-medium">Blog</h1>

        @if (count($tags) > 0)
            <div class="justify-center text-sm items-start">
                <ul>
                    @foreach ($tags as $tag)
                        <li class="inline">
                            <a href="/blog/tags/{{ $tag->getFilename() }}" class="hover:text-orange-500">
                                {{ '#' . $tag->getFilename() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>

    <section class="text-center mt-4">
        @forelse ($posts as $post)
            <a href="{{ $post->getUrl() }}">
                {{ $post->title }}
            </a>
        @empty
            Coming soon
        @endforelse
    </section>
@endsection
