<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('User') }}
            </h2>
            <x-button variant="primary" href="{{ route('user.create') }}">Add</x-button>
        </div>
    </x-slot>

    <div class="py-6">
        <livewire:user-table/>
    </div>
</x-app-layout>
