<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        {{ $slot }}
    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 p-4 w-72 min-h-full text-base-content">
            <div class="shrink-0 flex items-center mb-10">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-9 w-auto" />
                </a>
            </div>

            <div class="space-y-2">
                <x-sidebar.link 
                    title="Dashboard" 
                    href="{{ route('dashboard') }}"
                    :isActive="request()->routeIs('dashboard')"
                >
                    <x-slot name="icon">
                        <x-ri-dashboard-fill class="h-6 w-6" />
                    </x-slot>
                </x-sidebar.link>

                <x-sidebar.link 
                    title="User" 
                    href="{{ route('user.index') }}"
                    :isActive="request()->routeIs('user.*')"
                >
                    <x-slot name="icon">
                        <x-ri-user-line class="h-6 w-6" />
                    </x-slot>
                </x-sidebar.link>
            </div>
        </ul>
    </div>
</div>