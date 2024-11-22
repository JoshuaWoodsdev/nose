<nav x-data="{
    navigationMenuOpen: false,
    navigationMenu: '',
    navigationMenuCloseDelay: 200,
    navigationMenuCloseTimeout: null,
    navigationMenuLeave() {
        let that = this;
        this.navigationMenuCloseTimeout = setTimeout(() => {
            that.navigationMenuClose();
        }, this.navigationMenuCloseDelay);
    },
    navigationMenuReposition(navElement) {
        this.navigationMenuClearCloseTimeout();
        this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
        this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth / 2) + 'px';
    },
    navigationMenuClearCloseTimeout() {
        clearTimeout(this.navigationMenuCloseTimeout);
    },
    navigationMenuClose() {
        this.navigationMenuOpen = false;
        this.navigationMenu = '';
    }
}" class="relative z-10 w-auto">
    <div class="relative">
        <ul class="flex items-center justify-center flex-1 p-1 space-x-1 list-none border rounded-md text-neutral-700 group border-neutral-200/80">
            <li>
                <button
                    :class="{ 'bg-neutral-100': navigationMenu=='fragrance-brands', 'hover:bg-neutral-100': navigationMenu!='fragrance-brands' }"
                    @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='fragrance-brands'"
                    @mouseleave="navigationMenuLeave()"
                    class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none group w-max">
                    <span>Fragrance Brands</span>
                    <svg :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'fragrance-brands' }"
                        class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </li>
            <li>
                <button
                    :class="{ 'bg-neutral-100': navigationMenu=='perfumers', 'hover:bg-neutral-100': navigationMenu!='perfumers' }"
                    @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='perfumers'"
                    @mouseleave="navigationMenuLeave()"
                    class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
                    <span>Perfumers</span>
                    <svg :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'perfumers' }"
                        class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </li>
            <li>
                <button
                    :class="{ 'bg-neutral-100': navigationMenu=='marketplace', 'hover:bg-neutral-100': navigationMenu!='marketplace' }"
                    @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='marketplace'"
                    @mouseleave="navigationMenuLeave()"
                    class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
                    <span>Marketplace</span>
                    <svg :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'marketplace' }"
                        class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </li>
            <li>
                <a href="#about"
                    class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-neutral-100 group w-max">
                    About
                </a>
            </li>
        </ul>
    </div>
    <div x-ref="navigationDropdown" x-show="navigationMenuOpen" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" @mouseover="navigationMenuClearCloseTimeout()"
        @mouseleave="navigationMenuLeave()"
        class="absolute top-0 pt-3 duration-200 ease-out -translate-x-1/2 translate-y-11" x-cloak>

        <div class="flex justify-center w-auto h-auto overflow-hidden bg-white border rounded-md shadow-sm border-neutral-200/70">

            <!-- Fragrance Brands Section -->
            <div x-show="navigationMenu == 'fragrance-brands'" class="flex items-stretch justify-center w-full max-w-2xl p-6 gap-x-3">
                <div class="w-72">
                    <a href="#fragrance-collections" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Explore Collections</span>
                    </a>
                    <a href="#brand-signup" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Join as a Brand</span>
                    </a>
                </div>
            </div>

            <!-- Perfumers Section -->
            <div x-show="navigationMenu == 'perfumers'" class="flex items-stretch justify-center w-full p-6">
                <div class="w-72">
                    <a href="#perfumer-portfolio" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Showcase Portfolio</span>
                    </a>
                    <a href="#perfumer-signup" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Join as a Perfumer</span>
                    </a>
                </div>
            </div>

            <!-- Marketplace Section -->
            <div x-show="navigationMenu == 'marketplace'" class="flex items-stretch justify-center w-full p-6">
                <div class="w-72">
                    <a href="#browse-fragrances" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Browse Fragrances</span>
                    </a>
                    <a href="#create-listing" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Create a Listing</span>
                    </a>
                </div>
            </div>

            <!-- About Section -->
            <div x-show="navigationMenu == 'about'" class="flex items-stretch justify-center w-full p-6">
                <div class="w-72">
                    <a href="#about-us" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">About NoseIQ</span>
                    </a>
                    <a href="#our-team" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                        <span class="block mb-1 font-medium text-black">Meet the Team</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</nav>
