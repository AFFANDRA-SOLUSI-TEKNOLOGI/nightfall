@props([
    'variant' => 'white',
    'title' => null,
    'href' => null,
    'pill' => false
])

@php
    $baseClass = 'inline-flex items-center px-4 py-2 border border-transparent font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150  focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 ';
    $pillClass = $pill ? 'rounded-full ' : 'rounded-md ';
    
    switch ($variant) {
        case 'white':
            $variantClass = 'bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300';
        break;
        case 'primary':
            $variantClass = 'bg-primary-500 text-white hover:bg-primary-400 focus:bg-primary-700 dark:focus:bg-primary-100 active:bg-primary-900 dark:active:bg-primary-300';
        break;
        case 'secondary':
            $variantClass = 'bg-fuchsia-500 text-white hover:bg-fuchsia-400 focus:bg-fuchsia-700 dark:focus:bg-fuchsia-100 active:bg-fuchsia-900 dark:active:bg-fuchsia-300';
        break;
        case 'success':
            $variantClass = 'bg-teal-500 text-white hover:bg-teal-400 focus:bg-teal-700 dark:focus:bg-teal-100 active:bg-teal-900 dark:active:bg-teal-300';
        break;
        case 'info':
            $variantClass = 'bg-sky-500 text-white hover:bg-sky-400 focus:bg-sky-700 dark:focus:bg-sky-100 active:bg-sky-900 dark:active:bg-sky-300';
        break;
        case 'danger':
            $variantClass = 'bg-red-500 text-white hover:bg-red-400 focus:bg-red-700 dark:focus:bg-red-100 active:bg-red-900 dark:active:bg-red-300';
        break;
        case 'warning':
            $variantClass = 'bg-yellow-500 text-white hover:bg-yellow-400 focus:bg-yellow-700 dark:focus:bg-yellow-100 active:bg-yellow-900 dark:active:bg-yellow-300';
        break;
        default:
            $variantClass = 'bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300';
        break;
    }
@endphp

@if($href)
    <x-link {{ $attributes->merge(['class' => $baseClass.$pillClass.$variantClass, 'href' => $href]) }}>
        {{ $title ? $title : $slot }}
    </x-link>
@else 
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $baseClass.$pillClass.$variantClass]) }}>
        {{ $title ? $title : $slot }}
    </button>
@endif