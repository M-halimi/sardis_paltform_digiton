<div class="mx-auto max-w-7xl">
    <div x-data="{ showNavbar: true, lastScrollY: window.scrollY }">

        <div @scroll.window="
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
                    <x-application-logo class="md:w-[150px] w-[100px]"/>
                </a>
            </div>

            <div class="hidden xl:flex">
                <ul class="flex items-center gap-10">
                    <li class="relative py-2">
                        <x-nav-link href="" class="relative inline-block no-underline group"  :active="request()->is('#')">
                            Nos services
                            <span class="absolute bottom-0 left-1/2 h-px w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full group-hover:left-0"></span>
                        </x-nav-link>
                    </li>
                    <li class="relative py-2">
                    <x-nav-link href="{{ route('boutique.index') }}" class="relative inline-block no-underline group"  :active="request()->is('boutique*')">
                            Notre boutique
                            <span class="absolute bottom-0 left-1/2 h-px w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full group-hover:left-0"></span>
                        </x-nav-link>
                    </li>
                    <li class="relative py-2">
                        <x-nav-link href="" class="relative inline-block no-underline group" :active="request()->is('#')">
                            Portfolio
                            <span class="absolute bottom-0 left-1/2 h-px w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full group-hover:left-0"></span>
                        </x-nav-link>
                    </li>
                    <li class="relative py-2">
                        <x-nav-link href="" class="relative inline-block no-underline group" :active="request()->is('#')">
                            à propos
                                                        <span class="absolute bottom-0 left-1/2 h-px w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full group-hover:left-0"></span>
                        </x-nav-link>
                    </li>
                    <li class="relative py-2">
                        <x-nav-link href="" class="relative inline-block no-underline group" target="_blank"
                                    :active="request()->routeIs('#')">
                            Simulateur
                            <span class="absolute bottom-0 left-1/2 h-px w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full group-hover:left-0"></span>
                        </x-nav-link>
                    </li>
{{--
                    <li>
                        <x-nav-link href="" target="_blank"
>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </x-nav-link>
                    </li> --}}
{{--                   --}}
                    <li>
                        <x-nav-link >
                            <x-button-pages :text="'Consultation'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md'" :variant="'bg'"
                            :weight="'solid'" />
                        </x-nav-link>

                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6 xl:hidden">
{{--                <livewire:shopping-cart/>--}}

                <button x-on:click="OpenMune = !OpenMune" aria-label="navMenu" :aria-expanded="OpenMune" aria-controls="mobNav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                         fill="none" stroke="#24429a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
</div>
<hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">

{{-- Mobile navMenu --}}
<nav id="mobNav" class="fixed top-0 bottom-0 left-0 right-0 z-[9999] p-2 backdrop-blur-sm md:p-6 xl:hidden"
:class="OpenMune ? 'visible' : 'invisible'" x-cloak>
    <ul class="absolute top-0 bottom-0 right-0 w-10/12 py-8 text-lg transition-all bg-white drop-shadow-2xl "
        :class="OpenMune ? 'translate-x-0' : 'translate-x-full'">
        <li class="py-10 px-4">
            <div class="flex justify-center ">
                <a href="/">
                    <x-application-logo class="md:w-[200px] w-[150px]"/>
                </a>
            </div>
        </li>
        <li class="border-y border-inherit">
            <a class="block p-4 text-center" href="">Accueil</a>
        </li>
        <li class="border-y border-inherit">
            <a class="block p-4 text-center" href="">Nos services</a>
        </li>
        <li class="border-y border-inherit">
            <a class="block p-4 text-center relative no-underline after-line" href="">Notre boutique</a>
        </li>
        <li class="border-y border-inherit">
            <a class="block p-4 text-center" href="">Portfolio</a>
        </li>
        <li class="border-y border-inherit">
            <a class="block p-4 text-center" href="">à propos</a>
        </li>
        <li class="border-y border-inherit">
            <a class="block p-4 text-center" href="" target="_blank">Simulateur</a>
        </li>

        <li class="flex justify-center items-center mt-4">
            <x-button-pages :text="'Consultation'" :class="'bg-persian-plum-900 text-white text-center w-72'" :size="'md'" :variant="'bg'"
                                        :weight="'solid'" />
        </li>


    </ul>
    {{-- close   --}}
    <button class="p-2 rounded-full bg-accent-green/30 md:p-4 " x-on:click="OpenMune = false" aria-label="close-navMenu"
            :aria-expanded="OpenMune" aria-controls="mobNav">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#ffff"
             fill="none">
            <path d=" M19.0005 4.99988L5.00045 18.9999M5.00045 4.99988L19.0005 18.9999" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</nav>
