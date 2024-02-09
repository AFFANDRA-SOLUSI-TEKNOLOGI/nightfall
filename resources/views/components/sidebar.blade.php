<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        {{ $slot }}
    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 p-4 w-60 md:w-72 min-h-full text-base-content">
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
                        <x-heroicon-o-user class="h-6 w-6" />
                    </x-slot>
                </x-sidebar.link>

                <x-sidebar.link 
                    title="Buttons" 
                    href="{{ route('button.index') }}"
                    :isActive="request()->routeIs('button.*')"
                >
                    <x-slot name="icon">
                        <x-heroicon-o-adjustments-horizontal class="h-6 w-6" />
                    </x-slot>
                </x-sidebar.link>

                <x-sidebar.dropdown title="Dropdown">
                    <x-slot name="icon">
                        <x-heroicon-o-square-2-stack class="w-6 h-6" />
                    </x-slot>
                    
                    <x-sidebar.link 
                        title="Dummy Link" 
                        href="#"
                    />

                    <x-sidebar.link 
                        title="Dummy Link" 
                        href="#"
                    />
                </x-sidebar.dropdown>

                <x-sidebar.group title="Category">
                    <x-sidebar.link 
                        title="Dummy Link" 
                        href="#"
                    />
                </x-sidebar.group>
            </div>
        </ul>
    </div>
</div>