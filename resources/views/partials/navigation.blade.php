<section class="relative w-full px-8 text-gray-700 bg-white body-font" data-tails-scripts="//unpkg.com/alpinejs"
    {!! $attributes ?? '' !!}>
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <a href="#_"
            class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">tails.</a>

        <nav
            class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
            <a href="#_"
                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Home</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_"
                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Features</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_"
                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Pricing</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_"
                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Blog</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
        </nav>

        <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">

            <div class="w-full bg-gray-100 py-8">
                @if (Route::has('login'))
                    <nav class="flex justify-center space-x-4">
                        @auth
                            <div
                                class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
                                <span class="relative inline-flex w-full md:w-auto">
                                    <a href="{{ url('/dashboard') }}"
                                        class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-900 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                        Dashboard
                                    </a>
                                </span>
                            </div>
                        @else
                            <div
                                class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
                                <span class="relative inline-flex w-full md:w-auto">
                                    <a href="{{ route('login') }}"
                                        class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-gray-900 bg-gray-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">
                                        Log in
                                    </a>
                                </span>
                                @if (Route::has('register'))
                                    <span class="relative inline-flex w-full md:w-auto">
                                        <a href="{{ route('register') }}"
                                            class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-900 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                            Register
                                        </a>
                                    </span>
                                @endif
                            </div>
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </div>
</section>
