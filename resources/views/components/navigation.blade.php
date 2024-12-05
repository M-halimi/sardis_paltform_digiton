<div class="mx-auto mb-8 md:mb-2 max-w-7xl">
    <div x-data="{ showNavbar: true, lastScrollY: window.scrollY }"
         @scroll.window="
            showNavbar = window.scrollY <= lastScrollY || window.scrollY < 50;
            lastScrollY = window.scrollY;
        "
         :class="{
            '-translate-y-full': !showNavbar,
            'translate-y-0': showNavbar
        }"
         class="fixed top-0 left-0 bg-white z-[9999] w-full shadow-sm transition-transform duration-200">
        <nav class="flex items-center justify-between px-4 max-w-7xl mx-auto">

            <div class="py-4">
                <a href="/">
                    <x-application-logo class="md:w-[150px] object-cover w-[100px]"/>
                </a>
            </div>

            <div class="hidden xl:flex">
                <ul class="flex items-center gap-10 ">
                    <li>
                        <x-nav-link href="" :active="request()->is('#')">
                            Nos services
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="#" :active="request()->is('#')">
                            Notre boutique
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="#" :active="request()->is('#')">
                            Portfolio
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="#" :active="request()->is('#')">
                            à propos
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="#" target="#" :active="request()->routeIs('#')">
                            Simulateur
                        </x-nav-link>
                    </li>
                    <li>
                        <a href="#"
                           class="block cursor-pointer rounded-lg font-medium text-white bg-cobalt-800 px-3 py-1 md:px-6 md:py-1.5">
                            Consultation
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6 xl:hidden">

                <button x-on:click="openMenu = !openMenu" aria-label="navMenu" :aria-expanded="openMenu"
                        aria-controls="mobNav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                         fill="none" stroke="#58d185" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 6l16 0"/>
                        <path d="M4 12l16 0"/>
                        <path d="M4 18l16 0"/>
                    </svg>
                </button>

            </div>
        </nav>
    </div>
</div>
{{--<hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">--}}

{{-- Mobile navMenu --}}

