@props([
    'variant' => 'white'
])

@php
    $baseClass = 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 ';

    switch ($variant) {
        case 'white':
            $variantClass = 'bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300';
        break;
        case 'primary':
            $variantClass = 'bg-indigo-500 text-white hover:bg-indigo-400 focus:bg-indigo-700 dark:focus:bg-indigo-100 active:bg-indigo-900 dark:active:bg-indigo-300';
        break;
        default:
            $variantClass = 'bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300';
        break;
    }
@endphp

<x-link {{ $attributes->merge(['class' => $baseClass.$variantClass]) }}>
    {{ $slot }}
</x-link>
