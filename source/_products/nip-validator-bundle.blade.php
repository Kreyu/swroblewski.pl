---
extends: _layouts.product
title: NIP/TIN Validator Bundle
---

@section('content.outer')
    <section class="font-sans text-center px-6">
        <h1 class="mt-8 text-3xl font-medium">NIP/TIN Validator Bundle</h1>
        <h2 class="mb-4 text-xl font-medium">Validate the tax identification numbers with configurable validation constraint.</h2>
        <section class="inline-block">
            <a target="_blank" href="https://packagist.org/packages/kreyu/nip-validator-bundle">
                <img class="inline" src="https://poser.pugx.org/kreyu/nip-validator-bundle/version"/>
            </a>
            <a target="_blank" href="https://travis-ci.org/Kreyu/nip-validator-bundle">
                <img class="inline" src="https://travis-ci.org/Kreyu/nip-validator-bundle.svg"/>
            </a>
        </section>
        <x-code lang="shell" class="text-center">
            $ composer require kreyu/nip-validator-bundle
        </x-code>
        <section>
            <a href="https://github.com/Kreyu/nip-validator-bundle" class="btn hover:text-orange-500 transition-faster py-2 px-4 rounded inline-flex items-center">
                <i class="icon-github-alt w-4 h-5 mr-2"></i>
                <span>View on GitHub</span>
            </a>
        </section>
    </section>
@endsection
