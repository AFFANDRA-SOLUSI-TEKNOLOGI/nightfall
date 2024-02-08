<div class="p-4 lg:p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg">
    <div class="flex items-center gap-2">
        <div class="h-10 w-10 bg-base-content/10 dark:bg-gray-700 text-gray-900 dark:text-white rounded-full flex justify-center items-center">
            {{ $icon }}
        </div>
    </div>
    <div class="mt-4">
        <h6 class="text-2xl font-extrabold text-gray-900 dark:text-white">{{ $stat }}</h6>
        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ $description }}</p>
    </div>
</div>