@extends('_layouts.blog')

@section('content.outer')
    <section class="font-sans text-center px-6">
        <h1 class="mt-8 mb-4 text-3xl font-medium">Posts tagged with #{{ $page->getFilename() }}</h1>

        @if (count($tags) > 0)
            <div class="justify-center text-sm items-start">
                <ul>
                    @foreach ($tags as $tag)
                        <li class="inline"><a href="/blog/tags/{{ $tag->getFilename() }}" class="hover:text-orange-500 @if ($tag->getFilename() === $page->getFilename()) underline @endif">{{ '#' . $tag->getFilename() }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>

    <section class="text-center mt-4">
        @forelse ($page->getPostsWithTag($posts, $page->getFilename()) as $post)
            <a href="{{ $post->getUrl() }}">
                {{ $post->title }}
            </a>
        @empty
            No posts within this tag
        @endforelse
    </section>
@endsection
