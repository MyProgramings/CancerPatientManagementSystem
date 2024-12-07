<x-guest-layout>
    <div class="bg-gray-100 dark:bg-gray-900">
        <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
            <div class="mx-3 flex flex-1 justify-start hidden lg:block">

            </div>
            <div class="flex lg:justify-center lg:col-start-2">
                <x-button-dark-mode />
            </div>
            @if (Route::has('login'))
                <nav class="mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black dark:text-gray-200 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black dark:text-gray-200 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black dark:text-gray-200 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="mt-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                <a href="https://laravel.com/docs" id="docs-card"
                    class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white dark:bg-gray-800 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 dark:hover:text-gray-100 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10">
                    <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                    </div>

                    <div class="relative flex items-center gap-6 lg:items-end">
                    </div>
                </a>

                <a href="https://laracasts.com"
                    class="flex items-start gap-4 rounded-lg bg-white dark:bg-gray-800 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 dark:hover:text-gray-100 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10">
                </a>

                <a href="https://laravel-news.com"
                    class="flex items-start gap-4 rounded-lg bg-white dark:bg-gray-800 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 dark:hover:text-gray-100 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10">
                </a>

                <div
                    class="flex items-start gap-4 rounded-lg bg-white dark:bg-gray-800 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 dark:hover:text-gray-100 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10">
                </div>
            </div>
        </main>

        <footer class="py-16 text-center text-sm text-black">
        </footer>
    </div>
</x-guest-layout>
