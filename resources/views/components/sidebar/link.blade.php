@props([
    'isActive' => false,
    'title' => '',
])

@php
    $activeClass = $isActive ? 'bg-primary-500 hover:bg-primary-400 text-white shadow-lg' : '';
    $classes = 'flex items-center '.$activeClass;
@endphp
<li>
    <x-link {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon ?? false)
            {{ $icon }}
        @else
            <x-ri-link class="h-5 w-5" />
        @endif
        <span>{{ $title }}</span>
    </x-link>
</li>