<x-guest-layout>
    @slot('title', "Découvrez notre large gamme de produits sanitaires haut de gamme")
    @slot('site_description',"Robinetterie, accessoires et solutions innovantes pour sublimer votre espace.")

    <header>
        <div
            class="max-h-screen py-24 flex flex-col items-center justify-center bg-cover backdrop-blur-sm object-cover aspect-square bg-center w-full md:py-0"
            style=" background-image: url('{{ asset('assets/image-page-boutique/cover-image-for-page-boutique.png') }}'), linear-gradient(rgba(45,55,72,2), rgba(45,55,72,2));background-size: cover; background-position: center; background-blend-mode: overlay;">
            <div class="max-w-7xl mx-auto space-y-4 md:space-y-6">
                <h1 class="text-3xl md:text-4xl lg:text-6xl text-white tracking-wide max-w-6xl text-carrot-orange-400 text-center font-bold px-4 py-2 lg:px-2">
                    Votre fournisseur de robinetterie et accessoires sanitaires au Maroc
                </h1>

                <p class="max-w-4xl mx-auto text-xl font-semibold block text-tango-500 tracking-wide !leading-9 text-center md:text-3xl  px-4 lg:px-0">
                    Fournisseur exclusif de ramonsoler au maroc
                </p>
            </div>
        </div>
    </header>
    {{--  end header  --}}
{{--  section Découvrez Nos Marques de Référence !  --}}
    <section class="max-w-7xl mx-auto py-4 md:py-8 mt-4">
        <div class="flex flex-col justify-center items-center space-y-2 md:space-y-4">
            <h2 class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wide">
                Découvrez Nos Marques de Référence !
            </h2>
            <p class="text-lg md:text-2xl tracking-tight text-tango-500 font-semibold">
                Qualité et innovation pour tous vos produits sanitaires
            </p>
        </div>
    </section>
{{--  section slider  --}}

    <section class="py-8 px-4 lg:px-14">
        <div x-data="BrandData()" class="max-w-7xl mx-auto relative">
            <div class="overflow-hidden relative">
                <div class="flex  transition-transform duration-300 ease-in-out" x-bind:style="getTransformStyle()">
                    <template x-for="(brand, index) in brands" :key="index">
                        <div class="shrink-0" :style="`width: ${100 / visibleItems}%`">
                            <div class="p-4">
                                <button @click="toggleBrand(brand.name)"
                                        class="block bg-white shadow-md px-8 mx-auto rounded-3xl overflow-hidden w-64 h-64 aspect-square transition-all duration-300 hover:ring-4 hover:ring-blue-500"
                                        :class="{'ring-4 ring-persian-plum-500': isBrandSelected(brand.name)}">
                                    <div class="h-20 md:h-44 flex items-center justify-center">
                                        <img :src="brand.image"
                                             :alt="brand.name"
                                             class="max-w-full lg:max-h-full object-cover"/>
                                    </div>
                                </button>
                                <div class="mt-2 text-center font-medium text-lg text-black z-40">
                                    <span x-text="brand.name"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Navigation Buttons --}}
            <button @click="prev()"
                    class="absolute left-2 top-1/2 -translate-x-8 md:-translate-x-16 -translate-y-1/2 bg-blue-700 rounded-full p-2 text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed z-20"
                    :disabled="currentIndex === 0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button @click="next()"
                    class="absolute right-2 top-1/2 translate-x-8 md:translate-x-16 -translate-y-1/2 bg-blue-700 rounded-full p-2 text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed z-20"
                    :disabled="currentIndex >= maxIndex()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
    </section>
   {{-- section for read more   --}}
    <section class="max-w-7xl flex space-x-8 justify-center items-center mx-auto px-4 py-4">
            <div class="flex justify-center items-center">
                <div class="flex justify-center items-center">
                    <x-read-more :text="'Lire plus'">
                        Fondée en 1890, est une marque espagnole renommée pour sa robinetterie et ses accessoires de salle de bain alliant innovation. sécurité et design élégant. Présente dans plus de 60 pays, elle est reconnue pour ses systèmes avancés comme Thermostop et Hotblock, garantissant confort et protection.
                    </x-read-more>
                </div>

            </div>

        <div class="flex justify-center items-center">
            <x-read-more :text="'lire plus'">
                Fondée en 1890, est une marque espagnole
            </x-read-more>
        </div>

        <div class="flex justify-center items-center">
            <x-read-more :text="'lire plus'">
                Fondée en 1890, est une marque espagnole
            </x-read-more>
        </div>

        <div class="flex justify-center items-center">
            <x-read-more :text="'lire plus'">
                Fondée en 1890, est une marque espagnole
            </x-read-more>
        </div>
    </section>


@push('body::scripts')
{{--  script slider   --}}
        <script>
            function BrandData() {
                return {
                    currentIndex: 0,
                    visibleItems: window.innerWidth >= 1024 ? 4 : (window.innerWidth >= 768 ? 3 : 2),
                    brands: [
                        {name: 'Ramonsoler', image: '{{ asset("assets/image-page-accuiel/logo-silder1.png") }}'},
                        {name: 'MESATEKNIK', image: '{{ asset("assets/image-page-accuiel/logo-silder1.png") }}'},
                        {name: 'DIAMOND', image: '{{ asset("assets/image-page-accuiel/logo-silder1.png") }}'},
                        {name: 'DIAMOND', image: '{{ asset("assets/image-page-accuiel/logo-silder1.png") }}'},
                        {name: 'DIAMOND', image: '{{ asset("assets/image-page-accuiel/ramon-Soler-logo.png")}}'},
                        {name: 'DIAMOND', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}'},
                        {name: 'DIAMOND', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}'},
                        {name: 'ZENITH', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}'},
                        {name: 'ZENITH', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}'},
                        {name: 'ZENITH', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}'},
                    ],
                    maxIndex() {
                        return Math.max(0, this.brands.length - this.visibleItems);
                    },
                    getTransformStyle() {
                        const translateX = this.currentIndex * -(100 / this.visibleItems);
                        return `transform: translateX(${translateX}%)`;
                    },
                    prev() {
                        if (this.currentIndex > 0) {
                            this.currentIndex--;
                        }
                    },
                    next() {
                        if (this.currentIndex < this.maxIndex()) {
                            this.currentIndex++;
                        }
                    },
                    isBrandSelected(slug) {
                        // Replace this with the actual brand selection logic if needed
                        return false; // Placeholder logic
                    }
                };
            }
        </script>

    @endpush
</x-guest-layout>
