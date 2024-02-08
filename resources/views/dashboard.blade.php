<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
            <x-stat-card>
                <x-slot name="icon">
                    <x-ri-download-cloud-2-line class="w-5 h-5" />
                </x-slot>
                <x-slot name="stat">71,611</x-slot>
                <x-slot name="description">Total Downloads</x-slot>
            </x-stat-card>
            <x-stat-card>
                <x-slot name="icon">
                    <x-heroicon-o-users class="w-5 h-5" />
                </x-slot>
                <x-slot name="stat">10,586</x-slot>
                <x-slot name="description">Users</x-slot>
            </x-stat-card>
            <x-stat-card>
                <x-slot name="icon">
                    <x-heroicon-o-currency-dollar class="w-5 h-5" />
                </x-slot>
                <x-slot name="stat">$43.5K</x-slot>
                <x-slot name="description">Total Profit</x-slot>
            </x-stat-card>
        </div>

        <div class="mt-2 p-4 lg:p-6 bg-white dark:bg-gray-800 shadow-xl rounded-lg">
            <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">
                Downloads Overview
            </h1>
            <div class="w-full h-72 flex justify-center">
                <canvas id="linechart"></canvas>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-2">
            <div class="p-4 lg:p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg">
                <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">
                    Top Countries
                </h1>
                <div class="flex flex-col gap-2 mt-2">
                    <div class="bg-base-content/10 hover:bg-base-content/20 cursor-pointer p-2 rounded-md">
                      <div class="flex justify-between items-center gap-2">
                        <div class="flex items-center gap-2"><span class="fi fi-id rounded-sm"></span> Indonesia</div>
                        <div class="text-sm">200</div>
                      </div>
                    </div>
                    <div class="bg-base-content/10 hover:bg-base-content/20 w-[75%] cursor-pointer p-2 rounded-md">
                      <div class="flex justify-between items-center gap-2">
                        <div class="flex items-center gap-2"><span class="fi fi-my rounded-sm"></span> Malaysia</div>
                        <div class="text-sm">150</div>
                      </div>
                    </div>
                    <div class="bg-base-content/10 hover:bg-base-content/20 w-[50%] cursor-pointer p-2 rounded-md">
                      <div class="flex justify-between items-center gap-2">
                        <div class="flex items-center gap-2"><span class="fi fi-ps rounded-sm"></span> Palestine</div>
                        <div class="text-sm">100</div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg">
                <h1 class="font-medium text-gray-500 dark:text-gray-400 leading-relaxed">
                    Top OS
                </h1>
                <div class="flex flex-col gap-2 mt-2">
                    <div class="bg-base-content/10 hover:bg-base-content/20 cursor-pointer p-2 rounded-md">
                      <div class="flex justify-between items-center gap-2">
                        <div class="flex items-center gap-2"><x-ri-windows-fill class="w-5 h-5" /> Windows</div>
                        <div class="text-sm">384</div>
                      </div>
                    </div>
                    <div class="bg-base-content/10 hover:bg-base-content/20 w-[32.03%] cursor-pointer p-2 rounded-md">
                      <div class="flex justify-between items-center gap-2">
                        <div class="flex items-center gap-2"><x-ri-android-fill class="w-5 h-5" /> Android</div>
                        <div class="text-sm">123</div>
                      </div>
                    </div>
                    <div class="bg-base-content/10 hover:bg-base-content/20 w-[24.47%] cursor-pointer p-2 rounded-md">
                      <div class="flex justify-between items-center gap-2">
                        <div class="flex items-center gap-2"><x-ri-apple-fill class="w-5 h-5" /> iOS</div>
                        <div class="text-sm">94</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script type="module">
        new Chart(document.getElementById('linechart'), {
          type: 'line',
          data: {
            labels: Array.from({ length: 12 }, (_, i) => new Date(0, i).toLocaleString('default', { month: 'long' })),
            datasets: [{
              label: '# of Downloads',
              data: Array.from({ length: 12 }, () => Array.from({ length: 12 }, () => Math.floor(Math.random() * (100000 - 30000 + 1)) + 30000)),
              borderColor: "rgba(99, 102, 241)",
              backgroundColor: "rgba(99, 102, 241, 0.2)",
              borderWidth: 2,
              fill: true,
              tension: 0.3
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
          }
        });
      </script>
  
</x-app-layout>
