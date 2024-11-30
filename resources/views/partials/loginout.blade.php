<div class=" bg-white py-8">
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
                                class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-blue-700 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                Register
                            </a>
                        </span>
                    @endif
                </div>
            @endauth
        </nav>
    @endif
</div>