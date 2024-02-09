@props(['disabled' => false])

@if($attributes->get('type') === 'password')
<div class="relative">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-md shadow-sm']) !!}>
    <div aria-hidden="true" class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer"
        onclick="document.getElementById('{{ $attributes->get('id') }}').type = document.getElementById('{{ $attributes->get('id') }}').type === 'password' ? 'text' : 'password'"
    >
        <x-heroicon-o-eye-slash aria-hidden="true" class="w-5 h-5" />
    </div>
</div>
@else
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-md shadow-sm']) !!}>
@endif