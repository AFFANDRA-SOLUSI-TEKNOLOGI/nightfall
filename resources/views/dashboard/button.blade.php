<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Buttons') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div>
            <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Text</h1>
            <div class="flex flex-row flex-wrap gap-2">
                <x-button>Default</x-button>
                <x-button variant="primary">Primary</x-button>
                <x-button variant="secondary">Secondary</x-button>
                <x-button variant="success">Success</x-button>
                <x-button variant="info">Info</x-button>
                <x-button variant="warning">Warning</x-button>
                <x-button variant="danger">Danger</x-button>
            </div>
        </div>

        <div class="mt-4">
            <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Icon</h1>
            <div class="flex flex-row flex-wrap gap-2">
                <x-button><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /></x-button>
                <x-button variant="primary"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /></x-button>
                <x-button variant="secondary"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /></x-button>
                <x-button variant="success"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /></x-button>
                <x-button variant="info"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /></x-button>
                <x-button variant="warning"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /></x-button>
                <x-button variant="danger"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /></x-button>
            </div>
        </div>

        <div class="mt-4">
            <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Text Icon</h1>
            <div class="flex flex-row flex-wrap gap-2">
                <x-button><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /> Default</x-button>
                <x-button variant="primary"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /> Primary</x-button>
                <x-button variant="secondary"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /> Secondary</x-button>
                <x-button variant="success"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /> Success</x-button>
                <x-button variant="info"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /> Info</x-button>
                <x-button variant="warning"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /> Warning</x-button>
                <x-button variant="danger"><x-heroicon-o-adjustments-horizontal class="w-5 h-5" /> Danger</x-button>
            </div>
        </div>

        <div class="mt-4">
            <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Link</h1>
            <div class="flex flex-row flex-wrap gap-2">
                <x-button href="{{ route('button.index') }}">Default</x-button>
                <x-button variant="primary" href="{{ route('button.index') }}">Primary</x-button>
                <x-button variant="secondary" href="{{ route('button.index') }}">Secondary</x-button>
                <x-button variant="success" href="{{ route('button.index') }}">Success</x-button>
                <x-button variant="info" href="{{ route('button.index') }}">Info</x-button>
                <x-button variant="warning" href="{{ route('button.index') }}">Warning</x-button>
                <x-button variant="danger" href="{{ route('button.index') }}">Danger</x-button>
            </div>
        </div>

        <div class="mt-4">
            <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Pill</h1>
            <div class="flex flex-row flex-wrap gap-2">
                <x-button pill>Default</x-button>
                <x-button variant="primary" pill>Primary</x-button>
                <x-button variant="secondary" pill>Secondary</x-button>
                <x-button variant="success" pill>Success</x-button>
                <x-button variant="info" pill>Info</x-button>
                <x-button variant="warning" pill>Warning</x-button>
                <x-button variant="danger" pill>Danger</x-button>
            </div>
        </div>

        <div class="mt-4">
            <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Full Width</h1>
            <div class="flex flex-row flex-wrap gap-2">
                <x-button class="w-full justify-center">Default</x-button>
                <x-button variant="primary" class="w-full justify-center">Primary</x-button>
                <x-button variant="secondary" class="w-full justify-center">Secondary</x-button>
                <x-button variant="success" class="w-full justify-center">Success</x-button>
                <x-button variant="info" class="w-full justify-center">Info</x-button>
                <x-button variant="warning" class="w-full justify-center">Warning</x-button>
                <x-button variant="danger" class="w-full justify-center">Danger</x-button>
            </div>
        </div>


    </div>
</x-app-layout>
