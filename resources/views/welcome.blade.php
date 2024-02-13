<x-guest-layout where="home">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="https://github.com/affandra-solusi-teknologi/nightfall" target="_blank">
                    <x-application-logo class="w-48 h-16" />
                </a>
            </div>

            <div class="mt-12">
                @if(Route::has('login'))
                    @auth
                        <div class="flex justify-center gap-2">
                            <x-button variant="primary" href="{{ route('dashboard') }}">Dashboard</x-button>
                            <form method="POST" action="{{ route('web.logout') }}">
                                @csrf
                                
                                <x-button variant="danger" class="flex gap-2" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <x-heroicon-o-arrow-left-on-rectangle class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                                    <span>Logout</span>
                                </x-button>
                            </form>
                        </div>
                    @else
                        <div class="flex justify-center gap-2">
                            <x-button x-button variant="primary" href="{{ route('login') }}">Login</x-button>
                            @if (Route::has('register'))
                                <x-button x-button variant="primary" href="{{ route('register') }}">Register</x-button>
                            @endif
                        </div>
                    @endauth
                @endif
                <p class="mt-2 font-medium text-gray-500 dark:text-gray-400 leading-relaxed"><a href="https://github.com/affandra-solusi-teknologi/nightfall" target="_blank" class="hover:text-white transition">Nightfall</a> v1.0.2 PHP v{{ PHP_VERSION }}</p>
            </div>
    </div>
</x-guest-layout>