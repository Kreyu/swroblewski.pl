@extends('_layouts.product')

@section('body')
    <section class="font-sans text-center px-6">
        <h1 class="mt-8 text-3xl font-medium">Products</h1>
        <h2 class="mb-4 text-xl font-medium">Every product is open-source, licensed under terms of the MIT license.</h2>
    </section>

    <section class="text-center mt-4">
        <ul>
            @forelse ($products as $product)
                <li>
                    <a class="underline hover:text-orange-500 transition-faster" href="{{ $product->getUrl() }}">
                        {{ $product->title }}
                    </a>
                </li>
            @empty
                Coming soon
            @endforelse
        </ul>
    </section>
@endsection
