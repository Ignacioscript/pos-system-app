@php
    $classes = 'bg-gray-800 dark:bg-gray-100 py-1 px-2 rounded-lg   text-gray-100 dark:text-gray-800 font-bold hover:bg-gray-600 hover:text-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }} </a>
