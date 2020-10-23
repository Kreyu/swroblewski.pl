@php

    /**
     * @var string $slot
     * @var string $lang
     * @var int    $indent
     */
    $slot = preg_replace(sprintf('~^(\x20{%d}|\t)~m', $indent ?? 4), '', explode('\n', $slot)[0]);

@endphp

<div class="my-8">
    <pre><code class="{{ $lang }} {{ $class ?: '' }} bg-transparent p-0">{{{ $slot }}}</code></pre>
</div>
