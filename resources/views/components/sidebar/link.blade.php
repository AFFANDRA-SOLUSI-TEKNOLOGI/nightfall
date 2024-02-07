@props([
    'isActive' => false,
    'title' => '',
])

@php
    $activeClass = $isActive ? 'bg-indigo-500 hover:bg-indigo-400 text-white shadow-lg' : '';
    $classes = 'flex items-center '.$activeClass;
@endphp
<li>
    <x-link {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon ?? false)
            {{ $icon }}
        @else
            <x-ri-dashboard-fill class="h-5 w-5" />
        @endif
        <span>{{ $title }}</span>
    </x-link>
</li>