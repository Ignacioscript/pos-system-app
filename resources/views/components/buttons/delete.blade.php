@php
    $classes = 'bg-red-600 dark:bg-red-800 py-1 px-2 rounded-lg   text-gray-100 dark:text-gray-100 font-bold hover:bg-gray-600 hover:text-gray-100';
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }} </button>

