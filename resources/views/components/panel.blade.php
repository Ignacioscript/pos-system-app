@php
    //  $classes = 'p-4 bg-gray-400 rounded-xl  border border-transparent hover:border-indigo-700 group transition-colors duration-300';
      $classes = 'p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-xl shadow-md hover:border-indigo-700 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}

</div>
