<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary-700 dark:text-primary-400 leading-tight">
            {{ __('Administrator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-primary-700 dark:text-primary-400">{{ __('Welcome Back!') }}</h1>
                <div class="flex justify-center items-center mb-10">
                    <div class="grid grid-cols-2 gap-4">
                        <button wire:click="addToast" class="text-white rounded-lg bg-green-600 font-semibold p-3">
                            Success toast
                        </button>

                        <button wire:click="addToastInfo" class="text-white rounded-lg bg-blue-600 font-semibold p-3">
                            Info toast
                        </button>

                        <button wire:click="addToastWarning"
                            class="text-white rounded-lg bg-yellow-500 font-semibold p-3">
                            Warning toast
                        </button>

                        <button wire:click="addToastError" class="text-white rounded-lg bg-red-600 font-semibold p-3">
                            Error toast
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
