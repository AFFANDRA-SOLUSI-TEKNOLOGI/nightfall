<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        {{ $slot }}
    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 menu-lg p-4 w-80 min-h-full text-base-content flex justify-between">
            <div>
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto" />
                    </a>
                </div>

                {{-- <li><x-link href="/"><x-heroicon-o-home class="h-5 w-5" /> Beranda</x-link></li> --}}
            </div>

        </ul>
    </div>
</div>