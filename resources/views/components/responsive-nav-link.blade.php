@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 text-gray-900 bg-gray-100 rounded-xl font-bold'
            : 'block w-full ps-3 pe-4 py-2 text-gray-100 hover:underline ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
