@extends('_layouts.master')

@push('scripts')
    <script src="{{ mix('/js/slogans.js') }}"></script>
@endpush

@section('body')
    <main class="flex flex-col items-center m-auto max-w-5xl text-center justify-center px-4 h-8/10">
        @yield('content')
    </main>
@endsection
