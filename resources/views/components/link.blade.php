@props([
    'href' => '#',
    'text' => false,
    'hardRefresh' => false
])

@if($hardRefresh)
    <a href="{!! $href !!}" {{ $attributes }}>{{ $text ? $text : $slot }}</a>
@else
    <a href="{!! $href !!}" {{ $attributes }} wire:navigate>{{ $text ? $text : $slot }}</a>
@endif