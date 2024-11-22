<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NoseIQ - Fragrance Marketplace</title>

    <!-- Hide elements with x-cloak -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Vite assets -->
    @vite('resources/css/app.css')
    @vite('resources/css/main.css')

    <!-- Alpine.js for interactivity -->
    <script src="https://unpkg.com/alpinejs" defer></script>

</head>
<body class="flex flex-col items-start  max-w-7xl= mx-auto">
    <section class="w-full px-6 pb-12 antialiased bg-white">
        <div class="mx-auto max-w-7xl">

            <nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
                <div
                    class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
                    <div class="flex items-center justify-start w-1/4 h-full pr-4">
                        <a href="#_" class="flex items-center py-4 space-x-2 font-extrabold text-gray-900 md:py-0">
                            <span class="flex items-center justify-center w-8 h-8 text-white bg-gray-900 rounded-full">
                                <svg class="w-auto h-5 -translate-y-px" viewBox="0 0 69 66" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m31.2 12.2-3.9 12.3-13.4.5-13.4.5 10.7 7.7L21.8 41l-3.9 12.1c-2.2 6.7-3.8 12.4-3.6 12.5.2.2 5-3 10.6-7.1 5.7-4.1 10.9-7.2 11.5-6.8.6.4 5.3 3.8 10.5 7.5 5.2 3.8 9.6 6.6 9.8 6.4.2-.2-1.4-5.8-3.6-12.5l-3.9-12.2 8.5-6.2c14.7-10.6 14.8-9.6-.4-9.7H44.2L40 12.5C37.7 5.6 35.7 0 35.5 0c-.3 0-2.2 5.5-4.3 12.2Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span>LOGO</span>
                        </a>
                    </div>
                    <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex"
                        :class="{ 'flex fixed': showMenu, 'hidden': !showMenu }">
                        <div
                            class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                            <a href="#_"
                                class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">
                                <svg class="w-auto h-5" viewBox="0 0 355 99" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path
                                            d="M119.1 87V66.4h19.8c34.3 0 34.2-49.5 0-49.5-11 0-22 .1-33 .1v70h13.2zm19.8-32.7h-19.8V29.5h19.8c16.8 0 16.9 24.8 0 24.8zm32.6-30.5c0 9.5 14.4 9.5 14.4 0s-14.4-9.5-14.4 0zM184.8 87V37.5h-12.2V87h12.2zm22.8 0V61.8c0-7.5 5.1-13.8 12.6-13.8 7.8 0 11.9 5.7 11.9 13.2V87h12.2V61.1c0-15.5-9.3-24.2-20.9-24.2-6.2 0-11.2 2.5-16.2 7.4l-.8-6.7h-10.9V87h12.1zm72.1 1.3c7.5 0 16-2.6 21.2-8l-7.8-7.7c-2.8 2.9-8.7 4.6-13.2 4.6-8.6 0-13.9-4.4-14.7-10.5h38.5c1.9-20.3-8.4-30.5-24.9-30.5-16 0-26.2 10.8-26.2 25.8 0 15.8 10.1 26.3 27.1 26.3zM292 56.6h-26.6c1.8-6.4 7.2-9.6 13.8-9.6 7 0 12 3.2 12.8 9.6zm41.2 32.1c14.1 0 21.2-7.5 21.2-16.2 0-13.1-11.8-15.2-21.1-15.8-6.3-.4-9.2-2.2-9.2-5.4 0-3.1 3.2-4.9 9-4.9 4.7 0 8.7 1.1 12.2 4.4l6.8-8c-5.7-5-11.5-6.5-19.2-6.5-9 0-20.8 4-20.8 15.4 0 11.2 11.1 14.6 20.4 15.3 7 .4 9.8 1.8 9.8 5.2 0 3.6-4.3 6-8.9 5.9-5.5-.1-13.5-3-17-6.9l-6 8.7c7.2 7.5 15 8.8 22.8 8.8z"
                                            id="a"></path>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <g fill="currentColor">
                                            <path d="M19.742 49h28.516L68 83H0l19.742-34z"></path>
                                            <path d="M26 69h14v30H26V69zM4 50L33.127 0 63 50H4z"></path>
                                        </g>
                                        <g fill-rule="nonzero">
                                            <use fill="currentColor" xlink:href="#a"></use>
                                            <use fill="currentColor" xlink:href="#a"></use>
                                        </g>
                                    </g>
                                </svg>
                          </a>
                            @include('partials.navbar')
                            <div
                                class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                                <a href="#"
                                    class="w-full px-6 py-2 mr-0 text-gray-700 md:px-3 md:mr-2 lg:mr-3 md:w-auto">Sign
                                    In</a>
                                <a href="#_"
                                    class="inline-flex items-center w-full px-5 px-6 py-3 text-sm font-medium leading-4 text-white bg-gray-900 md:w-auto md:rounded-full hover:bg-gray-800 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-800">Sign
                                    Up</a>
                            </div>
                        </div>
                    </div>
                    <div @click="showMenu = !showMenu"
                        class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                        <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                </div>
            </nav>
            <!-- Main Hero Content -->
            <div
                class="container max-w-sm py-32 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
                <h1
                    class="text-3xl font-bold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:text-4xl md:text-7xl lg:text-8xl">
                    Welcome to NoseIQ</h1>
                <div class="mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl">NoseIQ offers a
                    platform for brands and perfumers to collaborate, creating unique and exquisite fragrance products.
                </div>
            </div>
            <!-- End Main Hero Content -->
        </div>
    </section>
    <!-- Main Content Section -->
    <div class="flex flex-col items-center justify-center w-full py-16 px-4">

        <!-- Marketplace Introduction -->

        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

                <!-- Image -->
                <div
                    class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                    <img src="https://cdn.devdojo.com/images/december2020/productivity.png"
                        class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 " />
                </div>

                <!-- Content -->
                <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                    <h2
                        class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        Boost Productivity
                    </h2>
                    <p
                        class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                        Build an atmosphere that creates productivity in your organization and your company culture.
                    </p>
                    <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"
                                data-primary="yellow-400"><span class="text-sm font-bold">✓</span></span> Maximize
                            productivity and growth
                        </li>
                        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"
                                data-primary="yellow-400"><span class="text-sm font-bold">✓</span></span> Speed past
                            your competition
                        </li>
                        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"
                                data-primary="yellow-400"><span class="text-sm font-bold">✓</span></span> Learn the top
                            techniques
                        </li>
                    </ul>
                </div>
                <!-- End  Content -->
            </div>
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">

                <!-- Content -->
                <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
                    <h2
                        class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        Automated Tasks
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                        Save time and money with our revolutionary services. We are the leaders in the industry.
                    </p>
                    <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"
                                data-primary="yellow-400"><span class="text-sm font-bold">✓</span></span> Automated task
                            management workflow
                        </li>
                        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"
                                data-primary="yellow-400"><span class="text-sm font-bold">✓</span></span> Detailed
                            analytics for your data
                        </li>
                        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"
                                data-primary="yellow-400"><span class="text-sm font-bold">✓</span></span> Some awesome
                            integrations
                        </li>
                    </ul>
                </div>
                <!-- End  Content -->
                <!-- Image -->
                <div
                    class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                    <img src="https://cdn.devdojo.com/images/december2020/settings.png"
                        class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32" />
                </div>
            </div>
        </section>
        <section class="py-20 bg-white">
            <div class="container max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold tracking-tight text-center">Our Features</h2>
                <p class="mt-2 text-lg text-center text-gray-600">Check out our list of awesome features below.</p>
                <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

                    <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500"
                            data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
                                <circle cx="6" cy="14" r="3" />
                                <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-700">Certifications</h4>
                        <p class="text-base text-center text-gray-500">Each of our plan will provide you and your team
                            with certifications.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500"
                            data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 8a3 3 0 0 1 0 6" />
                                <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                                <path
                                    d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-700">Notifications</h4>
                        <p class="text-base text-center text-gray-500">Send out notifications to all your customers to
                            keep them engaged.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500"
                            data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                <line x1="12" y1="12" x2="20" y2="7.5" />
                                <line x1="12" y1="12" x2="12" y2="21" />
                                <line x1="12" y1="12" x2="4" y2="7.5" />
                                <line x1="16" y1="5.25" x2="8" y2="9.75" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-700">Bundles</h4>
                        <p class="text-base text-center text-gray-500">High-quality bundles of awesome tools to help
                            you out.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500"
                            data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 9l3 3l-3 3" />
                                <line x1="13" y1="15" x2="16" y2="15" />
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-700">Developer Tools</h4>
                        <p class="text-base text-center text-gray-500">Developer tools to help grow your application
                            and keep it up-to-date.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500"
                            data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="9.5" y1="11" x2="9.51" y2="11" />
                                <line x1="14.5" y1="11" x2="14.51" y2="11" />
                                <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                                <path
                                    d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-700">Building Blocks</h4>
                        <p class="text-base text-center text-gray-500">The right kind of building blocks to take your
                            company to the next level.</p>
                    </div>

                    <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
                        data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500"
                            data-rounded="rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="15" y1="5" x2="15" y2="7" />
                                <line x1="15" y1="11" x2="15" y2="13" />
                                <line x1="15" y1="17" x2="15" y2="19" />
                                <path
                                    d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-700">Coupons</h4>
                        <p class="text-base text-center text-gray-500">Coupons system to provide special offers and
                            discounts for your app.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Login/Register Section -->
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


    <!-- Footer Section -->
    @include('partials.footer')
</body>

</html>
