@extends('_layouts.master')

@push('stylesheets')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/styles/darcula.min.css">
@endpush

@push('scripts')
    <script src="{{ mix('/js/highlight.js') }}"></script>
@endpush

@section('body')
    <main class="flex flex-col m-auto max-w-5xl h-9/10">
        @yield('content.outer')
    </main>
@endsection
