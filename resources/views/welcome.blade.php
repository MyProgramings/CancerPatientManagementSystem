<x-guest-layout>
    <div class="bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen dark:bg-gray-900">
            <nav class="bg-blue-900 text-white shadow-md">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                      <a href="#" class="text-2xl font-bold tracking-wide">Brand</a>
                    </div>
                    <!-- Links -->
                    <div class="hidden md:flex space-x-4">
                        <a href="#" class="hover:text-gray-200 transition duration-300">Home</a>
                        <a href="#" class="hover:text-gray-200 transition duration-300">About</a>
                        <a href="#" class="hover:text-gray-200 transition duration-300">Services</a>
                        <a href="#" class="hover:text-gray-200 transition duration-300">Contact</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="hover:text-gray-200 transition duration-300">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="hover:text-gray-200 transition duration-300">
                                    Log in
                                </a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="hover:text-gray-200 transition duration-300">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                      <x-button-dark-mode />
                    </div>
                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                    <x-button-dark-mode />
                      <button id="mobile-menu-button" class="focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Mobile Menu -->
                <div id="mobile-menu"  class="absolute top-16 left-0 w-full bg-blue-900 origin-top transform scale-y-0 transition-transform duration-300 ease-out z-50">
                  <a href="#" class="block px-4 py-2 hover:bg-blue-800">Home</a>
                  <a href="#" class="block px-4 py-2 hover:bg-blue-800">About</a>
                  <a href="#" class="block px-4 py-2 hover:bg-blue-800">Services</a>
                  <a href="#" class="block px-4 py-2 hover:bg-blue-800">Contact</a>
                  @if (Route::has('login'))
                  <nav class="mx-3 flex flex-1 justify-end">
                      @auth
                          <a href="{{ url('/dashboard') }}"
                              class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                              Dashboard
                          </a>
                      @else
                          <a href="{{ route('login') }}"
                              class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                              Log in
                          </a>
  
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}"
                                  class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                                  Register
                              </a>
                          @endif
                      @endauth
                  </nav>
              @endif
                </div>
              </nav>
              <header class="header-bg h-screen flex flex-col justify-center items-center text-blue-900 dark:text-blue-300">
                <!-- Header Content -->
                <div class="text-center">
                  <h1 class="text-4xl md:text-6xl font-bold drop-shadow-md">Welcome to Our Website</h1>
                  <p class="mt-4 text-lg md:text-2xl drop-shadow-md">We offer high-quality services tailored to your needs.</p>
                  <button wire:click="selectedItem" href="#services" class="mt-8 inline-block px-6 py-3 bg-blue-600 dark:bg-blue-300 rounded-full hover:bg-blue-700 transition duration-300 text-white dark:text-gray-900">Explore More</button>
                </div>
              </header>
        </div>
    </div>
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
    
        mobileMenuButton.addEventListener('click', () => {
          if (mobileMenu.classList.contains('scale-y-0')) {
            mobileMenu.classList.remove('scale-y-0');
            mobileMenu.classList.add('scale-y-100');
          } else {
            mobileMenu.classList.remove('scale-y-100');
            mobileMenu.classList.add('scale-y-0');
          }
        });
      </script>
</x-guest-layout>
