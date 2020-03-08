@extends('_layouts.master')

@section('body')
    <main class="flex flex-col items-center m-auto max-w-5xl text-center h-9/10">
        @yield('content.outer')
    </main>
@endsection
