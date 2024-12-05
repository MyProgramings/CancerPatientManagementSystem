<div class="bg-gray-100 dark:bg-gray-900">
    <x-button-dark-mode />
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            {{ $logo }}
        </div>
    
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-900 shadow-md overflow-hidden rounded-lg sm:border border-white">
            {{ $slot }}
        </div>
    </div>
</div>
