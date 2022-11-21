@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-dark  '
            : 'bg-success ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
