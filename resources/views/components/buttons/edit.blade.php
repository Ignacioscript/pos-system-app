@php
    $classes = 'bg-blue-700 py-1 px-2 rounded-lg   text-gray-100 dark:text-gray-100 font-bold hover:bg-gray-600 hover:text-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}

</a>
