@extends('_layouts.product')

@section('body')
    <section class="font-sans text-center px-6">
        <h1 class="mt-8 mb-4 text-3xl font-medium">Products</h1>
    </section>

    <section class="text-center mt-4">
        @forelse ($products as $product)
            <a href="{{ $product->getUrl() }}">
                {{ $product->title }}
            </a>
        @empty
            Coming soon
        @endforelse
    </section>
@endsection
