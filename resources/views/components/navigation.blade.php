<div class="mx-auto max-w-7xl">
    <div x-data="{ showNavbar: true, OpenMune: false, lastScrollY: window.scrollY }">

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
                <ul class="flex items-center gap-10 ">
                    <li>
                        <x-nav-link href="" :active="request()->is('services*')">
                            Nos services
                        </x-nav-link>
                    </li>
                    <li>
                    <x-nav-link href="{{route('boutique.index')}}"  :active="request()->is('notre-boutique*')">
                            Notre boutique
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="}" :active="request()->is('portfolio*')">
                            Portfolio
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="" :active="request()->is('a-propos*')">
                            à propos
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="" target="_blank"
                                    :active="request()->routeIs('#')">
                            Simulateur
                        </x-nav-link>
                    </li>
{{--                   --}}
                    <li>
                        {{--                        <button x-on:click="$dispatch('open-contact-form-modal')"--}}
                        {{--                            class="block cursor-pointer rounded-lg font-medium text-white bg-cobalt-800 px-3 py-1 md:px-6 md:py-1.5">--}}
                        {{--                            Consultation--}}
                        {{--                        </button>--}}
                        <a href=""
                           class="block cursor-pointer rounded-lg font-medium text-white bg-cobalt-800 px-3 py-1 md:px-6 md:py-1.5">
                            Consultation
                        </a>
                        {{--                        <template x-teleport="body">--}}
                        {{--                            <x-cta-contact />--}}
                        {{--                        </template>--}}
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
    :class="OpenMune ? 'translate-x-0' : 'translate-x-full invisible'">
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
            <a class="block p-4 text-center" href="">Notre boutique</a>
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

        <div class="flex justify-center items-center pt-2">
            <x-button-pages :title="'Consultation'" :route="'#'" :class="'w-72 text-center py-2.5'"/>
        </div>

    </ul>
    {{-- close navMenu --}}
    <button class="p-2 rounded-full bg-accent-green/30 md:p-4 " x-on:click="OpenMune = false" aria-label="close-navMenu"
            :aria-expanded="OpenMune" aria-controls="mobNav">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#ffff"
             fill="none">
            <path d=" M19.0005 4.99988L5.00045 18.9999M5.00045 4.99988L19.0005 18.9999" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</nav>
