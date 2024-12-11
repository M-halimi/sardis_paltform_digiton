<x-guest-layout>
    @slot('title', 'Découvrez notre large gamme de produits sanitaires haut de gamme')
    @slot('site_description', 'Robinetterie, accessoires et solutions innovantes pour sublimer votre espace.')

    <header>
        <div class="max-h-screen py-24 flex flex-col items-center justify-center bg-cover backdrop-blur-sm object-cover aspect-square bg-center w-full md:py-0"
            style=" background-image: url('{{ asset('assets/image-page-boutique/cover-image-for-page-boutique.png') }}'), linear-gradient(rgba(45,55,72,2), rgba(45,55,72,2));background-size: cover; background-position: center; background-blend-mode: overlay;">
            <div class="max-w-7xl mx-auto space-y-4 md:space-y-6">
                <h1
                    class="text-3xl md:text-4xl lg:text-6xl text-white tracking-wide max-w-6xl text-carrot-orange-400 text-center font-bold px-4 py-2 lg:px-2">
                    Votre fournisseur de robinetterie et accessoires sanitaires au Maroc
                </h1>

                <p
                    class="max-w-4xl mx-auto text-xl font-semibold block text-tango-500 tracking-wide !leading-9 text-center md:text-3xl  px-4 lg:px-0">
                    Fournisseur exclusif de ramonsoler au maroc
                </p>
            </div>
        </div>
    </header>
    {{--  end header  --}}
    {{--  section Découvrez Nos Marques de Référence !  --}}
    <section class="max-w-7xl mx-auto py-4 md:py-4 mt-4">
        <div class="flex flex-col justify-center items-center space-y-2 md:space-y-4">
            <h2
                class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wide">
                Découvrez Nos Marques de Référence !
            </h2>
            <p class="text-lg md:text-2xl tracking-tight text-tango-500 font-semibold">
                Qualité et innovation pour tous vos produits sanitaires
            </p>
        </div>
    </section>
    {{--  section slider  --}}

    <section class=" px-4 lg:px-14">
        <div x-data="BrandData()" class="max-w-7xl mx-auto relative">
            <div class="overflow-hidden relative">
                <div class="flex  transition-transform duration-300 ease-in-out" x-bind:style="getTransformStyle()">
                    <template x-for="(brand, index) in brands" :key="index">
                        <div class="shrink-0" :style="`width: ${100 / visibleItems}%`">
                            <div class="p-4">
                                <div @click="toggleBrand(brand.name)"
                                    class="flex justify-center items-center bg-white shadow-md px-8 mx-auto rounded-3xl overflow-hidden w-64 h-64 aspect-square transition-all duration-300 hover:ring-4 hover:ring-blue-500"
                                    :class="{ 'ring-4 ring-persian-plum-500': isBrandSelected(brand.name) }">
                                    <div class="h-20 md:h-44 flex items-center justify-center">
                                        <img :src="brand.image" :alt="brand.name" width="100" height="100"
                                            class="max-w-full lg:max-h-full object-cover" />
                                    </div>
                                </div>
                                <div class="mt-2 text-center font-medium text-lg text-black z-40">
                                    <span x-text="brand.name"></span>
                                </div>
                                {{-- <div x-data="{ expanded: false }" class="h-full flex flex-col mt-4">
                                    <p class="text-lg text-black tracking-wide px-0.5 flex-grow">
                                        <span x-show="!expanded" x-text="'Short description of ' + brand.name"></span>
                                        <span x-show="expanded" x-text="'Full description of ' + brand.name"></span>
                                    </p>
                                    <button
                                        @click="expanded = !expanded"
                                        class="text-orange-500 hover:text-orange-600 font-medium text-sm mt-2 focus:outline-none flex items-center"
                                    >
                                        lire plus
                                        <svg
                                            :class="{'rotate-180': expanded}"
                                            class="w-4 h-4 ml-1 transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div> --}}
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button @click="next()"
                class="absolute right-2 top-1/2 translate-x-8 md:translate-x-16 -translate-y-1/2 bg-blue-700 rounded-full p-2 text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed z-20"
                :disabled="currentIndex >= maxIndex()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>
    {{-- section for read more   --}}
    <section class="max-w-7xl flex space-x-8 justify-center items-center mx-auto px-6">
        <div class="container mx-auto ">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <x-read-more shortDescription="Fondée en 1890 est une marque espagnole"
                    fullDescription="renommée pour sa robinetterie et ses accessoires de salle de bain alliant innovation, sécurité et design élégant. Présente dans plus de 60 pays, elle est reconnue pour ses systèmes avancés comme Thermostat et Hotblock, garantissant confort et protection." />
                <x-read-more shortDescription="Une marque turque reconnue pour ses équipements"
                    fullDescription="et accessoires de salle de bain alliant qualité, design moderne et praticité. Proposant des solutions variées comme les cabines de douche et les porte-serviettes, elle s'adapte aux besoins de chaque espace pour un confort optimal." />
                <x-read-more shortDescription="Expert en équipements sanitaires depuis 1932"
                    fullDescription="allie innovation et personnalisation pour des solutions robustes et fiables dans les secteurs de la restauration, de l'hôtellerie et des équipements médicaux." />
                <x-read-more
                    shortDescription="Une marque de robinetterie de luxe spécialisée dans des produits élégants"
                    fullDescription="et sophistiqués, tels que des mélangeurs et des accessoires haut de gamme. Elle allie esthétique, durabilité et innovation pour offrir des solutions adaptées aux salles de bain de prestige." />
            </div>
        </div>
    </section>
    {{-- end section Découvrez Nos Marques de Référence ! --}}

    <section class="max-w-7xl mx-auto py-4 md:py-8 px-4">
        <div class="flex flex-col justify-center items-center space-y-3.5">
            <h2
                class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wide">
                Explorez nos catégories de produits sanitaires
            </h2>
            <p class="text-lg md:text-2xl tracking-wide text-tango-500 font-semibold  max-w-2xl text-center">
                Robinetterie, Accessoires et Solutions pour une salle de bain moderne et fonctionnelle
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 px-2 md:px-0 py-4 md:py-12 place-content-center">
            <!-- Card 1 -->
            <div class="relative translate-y-0 sm:translate-y-4 md:translate-y-6 md:w-10/12 md:h-64 ">
                <img src="{{ asset('assets/image-page-boutique/robinetterie.png') }}"
                    class="w-full md:w-80 h-full object-cover aspect-square rounded-3xl" width="80" height="80"
                    alt="robinetterie" loading="lazy" />
            </div>
            <!-- Card 2 -->
            <div class="relative translate-y-0 sm:-translate-y-2 md:-translate-y-4 md:w-10/12 md:h-64">
                <img src="{{ asset('assets/image-page-boutique/siphons-et-caniveaux.png') }}"
                    class="w-full md:w-80 rounded-3xl h-full  object-cover aspect-square" width="80" height="80"
                    loading="lazy" alt="siphons-et-caniveaux" />
            </div>
            <!-- Card 3 -->
            <div
                class="relative translate-y-0 sm:translate-y-4 md:translate-y-6  md:w-10/12 md:h-64 bg-french-pass-50 border shadow-md rounded-2xl overflow-hidden">
                <img src="{{ asset('assets/image-page-boutique/clapets-et-regards.png') }}"
                    class="w-full md:w-80 h-full object-cover aspect-square rounded-3xl" width="80" height="80"
                    loading="lazy" alt="clapets-et-regards" />
            </div>
            <!-- Card 4 -->
            <div class="relative translate-y-0 sm:-translate-y-2 md:-translate-y-4 md:w-10/12 md:h-64">
                <img src="{{ asset('assets/image-page-boutique/accessoires-salle-de-bain.png') }}" loading="lazy"
                    class="w-full md:w-80 h-full object-cover bg-cover aspect-square rounded-3xl" width="80" height="80"
                    alt="accessoires-salle-de-bain" />
            </div>
        </div>

    </section>
    {{-- end section  --}}
    {{-- section Découvrez notre sélection de produits sanitaires --}}

    <section class="max-w-7xl mx-auto py-4 px-4">
        <div class="flex flex-col justify-center items-center space-y-4">
            <h2
                class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wide">
                Découvrez notre sélection de produits sanitaires
            </h2>

            <p class="text-lg md:text-2xl tracking-wide text-center max-w-2xl text-tango-500 font-semibold">
                Robinetterie, Sèche-mains et Accessoires pour sublimer votre salle de bain
            </p>
        </div>
        <div class="grid grid-rows-3 gap-4">
            {{-- grid 1 --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 mt-8">
                <!-- Product Card -->
                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>
                <!-- Duplicate for other cards -->
                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>

                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>

                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56  object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>
            </div>
            {{-- grid 1 --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 mt-8">
                <!-- Product Card -->
                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="p-1 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>
                <!-- Duplicate for other cards -->
                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5 ">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>

                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>

                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        {{--                        <button class="mt-4 bg-persian-plum-900 text-white py-4 px-4 rounded-lg w-56">More Detail</button> --}}
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>
            </div>

            {{-- grid 3 --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 mt-8">
                <!-- Product Card -->
                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>
                <!-- Duplicate for other cards -->
                <div class="border  rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="p-y-4text-center flex flex-col justify-center items-center space-y-1.5 ">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>

                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>

                <div class="border rounded-3xl duration-500 hover:scale-105 hover:shadow-xl  transform overflow-hidden">
                    <img src="{{ asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png') }}"
                        alt="Product Image"
                        class="w-full max-h-56 object-cover bg-center aspect-square rounded-t-3xl object-top"
                        width="100" height="100">
                    <div class="py-4 text-center flex flex-col justify-center items-center space-y-1.5">
                        <h3 class="font-semibold text-lg md:text-xl text-cobalt-950">Titre produit</h3>
                        {{--                        <button class="mt-4 bg-persian-plum-900 text-white py-4 px-4 rounded-lg w-56">More Detail</button> --}}
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white text-center'" :size="'md '" :variant="'bg'"
                            :weight="'solid'" />
                    </div>
                </div>
            </div>
            {{-- pagination --}}
            {{-- {{ $produits->links() }} --}}
        </div>
    </section>
    {{-- <section class="p-5 py-10 w-80 h-80 bg-biscay-50 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
        <img src="https://www.dropbox.com/s/mlor33hzk73rh0c/x14423.png?dl=1" alt="">
        <h1 class="text-3xl my-5">Soft Plushy Cushion Chair</h1>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, incidunt!</p>
        <h2 class="font-semibold mb-5">$29.99</h2>
        <button class="p-2 px-6 bg-purple-500 text-white rounded-md hover:bg-purple-600">Add To Cart</button>
    </section>
    end scrtion Découvrez notre sélection de produits sanitaires --}}
    <section class="max-w-7xl mx-auto py-4 px-4">
        <div class="bg-white">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col justify-center items-center space-y-4">
                    <h2
                        class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wide">
                        La promesse de sardis</h2>
                    <p class="text-lg md:text-2xl tracking-wide text-center max-w-2xl text-tango-500 font-semibold">
                        Notre engagement envers la qualité et le service client</p>
                </div>
                <div
                    class="place-content-center mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16  lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article
                        class="flex max-w-xl flex-col items-start justify-between p-10 bg-white border rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ asset('assets/image-page-boutique/refresh-icon-reload-perforated-paper.jpg') }}"
                            class="w-full  rounded-2xl object-cover transform hover:scale-105 transition-transform duration-300"
                            alt="refresh-icon-reload-perforated-paper" width="100" height="100">
                        <div class="group relative flex flex-col justify-center items-center">
                            <h4
                                class="py-2.5 font-semibold w-48 text-cobalt-600 text-center text-xl mt-3 underline-offset-2 underline decoration-cobalt-800">
                                <a href="/#">
                                    <span class="absolute inset-0"></span>
                                    Zero rupture stock
                                </a>
                            </h4>
                            <p class="text-lg mt-4 text-black tracking-wide px-0.5">On assure le maintien de la
                                disponibilité de nos articles, pour que vous puissiez les commander sans rupture de
                                stock.</p>
                        </div>
                    </article>

                    {{-- article 2 --}}
                    <article
                        class="flex max-w-xl flex-col items-start justify-between p-10 bg-white border rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ asset('assets/image-page-boutique/délais-de-livraison.jpeg') }}"
                            class="w-full rounded-2xl object-cover transform hover:scale-105 transition-transform duration-300"
                            alt="refresh-icon-reload-perforated-paper" alt="délais-de-livraison" width="100"
                            height="100">
                        <div class="group relative flex flex-col justify-center items-center">
                            <h4
                                class="py-2.5 font-semibold w-48 text-cobalt-600 text-center text-xl mt-3 underline-offset-2 underline decoration-cobalt-800">
                                <a href="/#">
                                    <span class="absolute inset-0"></span>
                                    Délais de livraison
                                </a>
                            </h4>
                            <p class="text-lg mt-4 text-black tracking-wide px-0.5">Nous nous engageons à respecter les
                                délais de livraison pour que vous receviez vos articles dans les délais prévus.</p>
                        </div>
                    </article>
                    {{-- article 3 --}}

                    <article
                        class="flex max-w-xl flex-col items-start justify-between p-10 bg-white border rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ asset('assets/image-page-boutique/garantie-produit.jpg') }}"
                            alt="garantie-produit"
                            class="w-full rounded-2xl object-cover transform hover:scale-105 transition-transform duration-300"
                            alt="refresh-icon-reload-perforated-paper" width="100" height="100">
                        <div class="group relative flex flex-col justify-center items-center">
                            <h4
                                class="py-2.5 font-semibold w-48 text-cobalt-600 text-center text-xl mt-3 underline-offset-2 underline decoration-cobalt-800">
                                <a href="/#">
                                    <span class="absolute inset-0"></span>
                                    Garantie produit
                                </a>
                            </h4>
                            <p class="text-lg mt-4 text-black tracking-wide px-0.5">Si vous n’êtes pas satisfait de
                                votre achat, nous vous offrons une garantie satisfait ou remboursé.</p>
                        </div>
                    </article>

                    <!-- More posts... -->
                </div>
            </div>
        </div>
    </section>
    {{-- end section --}}
    <section class="max-w-7xl mx-auto px- py-4">
        <div class="space-y-4">
            <h2
                class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wide">
                {{ __('Foire aux questions') }}
            </h2>

            <div class="flex justify-center mt-8 px-4 md:px-2">
            <div class="space-y-4">
                <div class="group">
                    <div class="flex items-start gap-3 hover:text-primary transition-colors">
                        <span class="inline-block text-tango-500 mt-1">
                            <svg width="32" height="32" viewBox="0 0 51 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#a)">
                                    <path
                                        d="M51 24.5c0 2.058-1.346 3.77-2.647 5.426-.78.994-1.518 1.934-1.935 2.898-.442 1.025-.634 2.286-.819 3.506-.307 2.018-.624 4.107-2.068 5.494s-3.617 1.692-5.718 1.987c-1.27.178-2.583.362-3.649.787-1.004.4-1.982 1.109-3.016 1.86-1.723 1.25-3.505 2.541-5.648 2.541s-3.925-1.292-5.648-2.541c-1.035-.751-2.012-1.46-3.016-1.86-1.066-.425-2.379-.61-3.648-.787-2.103-.295-4.276-.6-5.72-1.987-1.443-1.386-1.76-3.475-2.067-5.494-.185-1.22-.377-2.481-.82-3.506-.416-.964-1.153-1.904-1.935-2.898C1.346 28.271 0 26.56 0 24.5s1.346-3.771 2.647-5.427c.781-.994 1.519-1.933 1.935-2.898.442-1.024.634-2.285.82-3.505.306-2.019.624-4.108 2.067-5.495s3.617-1.691 5.719-1.986c1.27-.178 2.582-.363 3.648-.787 1.004-.4 1.982-1.11 3.017-1.86C21.575 1.292 23.357 0 25.5 0s3.925 1.293 5.649 2.542c1.034.75 2.011 1.46 3.016 1.86 1.066.424 2.379.609 3.648.787 2.101.295 4.275.6 5.718 1.986 1.444 1.387 1.76 3.475 2.069 5.495.184 1.22.377 2.48.819 3.505.416.965 1.154 1.904 1.935 2.898C49.655 20.73 51 22.441 51 24.5"
                                        fill="#1A305E" />
                                    <path
                                        d="M38.18 20.821 23.93 34.512a1.56 1.56 0 0 1-2.145 0l-8.965-8.614a1.417 1.417 0 0 1 0-2.06l2.183-2.097a1.56 1.56 0 0 1 2.145 0l5.71 5.486 10.995-10.564a1.56 1.56 0 0 1 2.145 0l2.183 2.097c.592.57.592 1.492 0 2.061"
                                        fill="#fff" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h51v49H0z" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>
                        <h3 class="text-lg font-medium leading-6 group-hover:text-primary transition-colors">
                            Quels matériaux utilisez-vous pour vos produits sanitaires ?
                        </h3>
                    </div>
                </div>

                <div class="group">
                    <div class="flex items-start gap-3 hover:text-primary transition-colors">
                        <span class="inline-block text-tango-500 mt-1">
                            <svg width="32" height="32" viewBox="0 0 51 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#a)">
                                    <path
                                        d="M51 24.5c0 2.058-1.346 3.77-2.647 5.426-.78.994-1.518 1.934-1.935 2.898-.442 1.025-.634 2.286-.819 3.506-.307 2.018-.624 4.107-2.068 5.494s-3.617 1.692-5.718 1.987c-1.27.178-2.583.362-3.649.787-1.004.4-1.982 1.109-3.016 1.86-1.723 1.25-3.505 2.541-5.648 2.541s-3.925-1.292-5.648-2.541c-1.035-.751-2.012-1.46-3.016-1.86-1.066-.425-2.379-.61-3.648-.787-2.103-.295-4.276-.6-5.72-1.987-1.443-1.386-1.76-3.475-2.067-5.494-.185-1.22-.377-2.481-.82-3.506-.416-.964-1.153-1.904-1.935-2.898C1.346 28.271 0 26.56 0 24.5s1.346-3.771 2.647-5.427c.781-.994 1.519-1.933 1.935-2.898.442-1.024.634-2.285.82-3.505.306-2.019.624-4.108 2.067-5.495s3.617-1.691 5.719-1.986c1.27-.178 2.582-.363 3.648-.787 1.004-.4 1.982-1.11 3.017-1.86C21.575 1.292 23.357 0 25.5 0s3.925 1.293 5.649 2.542c1.034.75 2.011 1.46 3.016 1.86 1.066.424 2.379.609 3.648.787 2.101.295 4.275.6 5.718 1.986 1.444 1.387 1.76 3.475 2.069 5.495.184 1.22.377 2.48.819 3.505.416.965 1.154 1.904 1.935 2.898C49.655 20.73 51 22.441 51 24.5"
                                        fill="#1A305E" />
                                    <path
                                        d="M38.18 20.821 23.93 34.512a1.56 1.56 0 0 1-2.145 0l-8.965-8.614a1.417 1.417 0 0 1 0-2.06l2.183-2.097a1.56 1.56 0 0 1 2.145 0l5.71 5.486 10.995-10.564a1.56 1.56 0 0 1 2.145 0l2.183 2.097c.592.57.592 1.492 0 2.061"
                                        fill="#fff" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h51v49H0z" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>

                        <h3 class="text-lg font-medium leading-6 group-hover:text-primary transition-colors">
                            Vos produits sont-ils compatibles avec les normes européennes/marocaines ?
                        </h3>
                    </div>
                </div>

                <div class="group">
                    <div class="flex items-start gap-3 hover:text-primary transition-colors">
                        <span class="inline-block text-tango-500 mt-1">
                            <svg width="32" height="32" viewBox="0 0 51 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#a)">
                                    <path
                                        d="M51 24.5c0 2.058-1.346 3.77-2.647 5.426-.78.994-1.518 1.934-1.935 2.898-.442 1.025-.634 2.286-.819 3.506-.307 2.018-.624 4.107-2.068 5.494s-3.617 1.692-5.718 1.987c-1.27.178-2.583.362-3.649.787-1.004.4-1.982 1.109-3.016 1.86-1.723 1.25-3.505 2.541-5.648 2.541s-3.925-1.292-5.648-2.541c-1.035-.751-2.012-1.46-3.016-1.86-1.066-.425-2.379-.61-3.648-.787-2.103-.295-4.276-.6-5.72-1.987-1.443-1.386-1.76-3.475-2.067-5.494-.185-1.22-.377-2.481-.82-3.506-.416-.964-1.153-1.904-1.935-2.898C1.346 28.271 0 26.56 0 24.5s1.346-3.771 2.647-5.427c.781-.994 1.519-1.933 1.935-2.898.442-1.024.634-2.285.82-3.505.306-2.019.624-4.108 2.067-5.495s3.617-1.691 5.719-1.986c1.27-.178 2.582-.363 3.648-.787 1.004-.4 1.982-1.11 3.017-1.86C21.575 1.292 23.357 0 25.5 0s3.925 1.293 5.649 2.542c1.034.75 2.011 1.46 3.016 1.86 1.066.424 2.379.609 3.648.787 2.101.295 4.275.6 5.718 1.986 1.444 1.387 1.76 3.475 2.069 5.495.184 1.22.377 2.48.819 3.505.416.965 1.154 1.904 1.935 2.898C49.655 20.73 51 22.441 51 24.5"
                                        fill="#1A305E" />
                                    <path
                                        d="M38.18 20.821 23.93 34.512a1.56 1.56 0 0 1-2.145 0l-8.965-8.614a1.417 1.417 0 0 1 0-2.06l2.183-2.097a1.56 1.56 0 0 1 2.145 0l5.71 5.486 10.995-10.564a1.56 1.56 0 0 1 2.145 0l2.183 2.097c.592.57.592 1.492 0 2.061"
                                        fill="#fff" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h51v49H0z" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>

                        <h3 class="text-lg font-medium leading-6 group-hover:text-primary transition-colors">
                            Proposez-vous des produits éco-responsables ou économes en eau ?
                        </h3>
                    </div>
                </div>

                <div class="group">
                    <div class="flex items-start gap-3 hover:text-primary transition-colors">
                        <span class="inline-block text-tango-500 mt-1">
                            <svg width="32" height="32" viewBox="0 0 51 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#a)">
                                    <path
                                        d="M51 24.5c0 2.058-1.346 3.77-2.647 5.426-.78.994-1.518 1.934-1.935 2.898-.442 1.025-.634 2.286-.819 3.506-.307 2.018-.624 4.107-2.068 5.494s-3.617 1.692-5.718 1.987c-1.27.178-2.583.362-3.649.787-1.004.4-1.982 1.109-3.016 1.86-1.723 1.25-3.505 2.541-5.648 2.541s-3.925-1.292-5.648-2.541c-1.035-.751-2.012-1.46-3.016-1.86-1.066-.425-2.379-.61-3.648-.787-2.103-.295-4.276-.6-5.72-1.987-1.443-1.386-1.76-3.475-2.067-5.494-.185-1.22-.377-2.481-.82-3.506-.416-.964-1.153-1.904-1.935-2.898C1.346 28.271 0 26.56 0 24.5s1.346-3.771 2.647-5.427c.781-.994 1.519-1.933 1.935-2.898.442-1.024.634-2.285.82-3.505.306-2.019.624-4.108 2.067-5.495s3.617-1.691 5.719-1.986c1.27-.178 2.582-.363 3.648-.787 1.004-.4 1.982-1.11 3.017-1.86C21.575 1.292 23.357 0 25.5 0s3.925 1.293 5.649 2.542c1.034.75 2.011 1.46 3.016 1.86 1.066.424 2.379.609 3.648.787 2.101.295 4.275.6 5.718 1.986 1.444 1.387 1.76 3.475 2.069 5.495.184 1.22.377 2.48.819 3.505.416.965 1.154 1.904 1.935 2.898C49.655 20.73 51 22.441 51 24.5"
                                        fill="#1A305E" />
                                    <path
                                        d="M38.18 20.821 23.93 34.512a1.56 1.56 0 0 1-2.145 0l-8.965-8.614a1.417 1.417 0 0 1 0-2.06l2.183-2.097a1.56 1.56 0 0 1 2.145 0l5.71 5.486 10.995-10.564a1.56 1.56 0 0 1 2.145 0l2.183 2.097c.592.57.592 1.492 0 2.061"
                                        fill="#fff" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h51v49H0z" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>

                        <h3 class="text-lg font-medium leading-6 group-hover:text-primary transition-colors">
                            Comment choisir le bon type de robinet/sèche-mains pour ma salle de bain ?
                        </h3>
                    </div>
                </div>

                <div class="group">
                    <div class="flex items-start gap-3 hover:text-primary transition-colors">
                        <span class="inline-block text-tango-500 mt-1">
                            <svg width="32" height="32" viewBox="0 0 51 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#a)">
                                    <path
                                        d="M51 24.5c0 2.058-1.346 3.77-2.647 5.426-.78.994-1.518 1.934-1.935 2.898-.442 1.025-.634 2.286-.819 3.506-.307 2.018-.624 4.107-2.068 5.494s-3.617 1.692-5.718 1.987c-1.27.178-2.583.362-3.649.787-1.004.4-1.982 1.109-3.016 1.86-1.723 1.25-3.505 2.541-5.648 2.541s-3.925-1.292-5.648-2.541c-1.035-.751-2.012-1.46-3.016-1.86-1.066-.425-2.379-.61-3.648-.787-2.103-.295-4.276-.6-5.72-1.987-1.443-1.386-1.76-3.475-2.067-5.494-.185-1.22-.377-2.481-.82-3.506-.416-.964-1.153-1.904-1.935-2.898C1.346 28.271 0 26.56 0 24.5s1.346-3.771 2.647-5.427c.781-.994 1.519-1.933 1.935-2.898.442-1.024.634-2.285.82-3.505.306-2.019.624-4.108 2.067-5.495s3.617-1.691 5.719-1.986c1.27-.178 2.582-.363 3.648-.787 1.004-.4 1.982-1.11 3.017-1.86C21.575 1.292 23.357 0 25.5 0s3.925 1.293 5.649 2.542c1.034.75 2.011 1.46 3.016 1.86 1.066.424 2.379.609 3.648.787 2.101.295 4.275.6 5.718 1.986 1.444 1.387 1.76 3.475 2.069 5.495.184 1.22.377 2.48.819 3.505.416.965 1.154 1.904 1.935 2.898C49.655 20.73 51 22.441 51 24.5"
                                        fill="#1A305E" />
                                    <path
                                        d="M38.18 20.821 23.93 34.512a1.56 1.56 0 0 1-2.145 0l-8.965-8.614a1.417 1.417 0 0 1 0-2.06l2.183-2.097a1.56 1.56 0 0 1 2.145 0l5.71 5.486 10.995-10.564a1.56 1.56 0 0 1 2.145 0l2.183 2.097c.592.57.592 1.492 0 2.061"
                                        fill="#fff" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h51v49H0z" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>

                        <h3 class="text-lg font-medium leading-6 group-hover:text-primary transition-colors">
                            Quelle est la différence entre vos gammes de produits standard et haut de gamme ?
                        </h3>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    {{-- end section --}}
    <section class="py-8">
        <div class="h-[350px] flex items-center justify-center bg-cover aspect-square bg-center w-full"
            style="background-image: url('{{ asset('assets/image-page-boutique/van-marcke-badkamerkranen-wastafel-salle-de-bains-robinets-lavabo-header1.png') }}'); background-size: cover; background-position: center;">
            <div class="bg-black/60 w-full h-full flex flex-col justify-center items-center px-4">
                <h2 class="font-bold max-w-5xl md:px-14 md:text-3xl text-center text-tango-500 text-lg tracking-wide">
                    Ne manquez aucune nouveauté
                </h2>
                <div
                    class="max-w-full md:max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 px-6 md:px-20 py-8 w-full items-center">
                    <!-- Left Text Section -->
                    <div class="text-center md:text-left">
                        <p class="block font-semibold text-lg md:text-2xl text-white tracking-wider max-w-md">
                            Inscrivez-vous à notre newsletter et restez informé de nos nouveautés et conseils.
                        </p>
                    </div>

                    <!-- Right Form Section -->
                    <div class="flex flex-col items-center justify-center md:justify-end gap-4 mt-2 md:mt-8 ">
                        <input type="text" id="email"
                            class="block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-72 md:w-[30rem] p-2.5"
                            placeholder="E-mail" required />
                        <x-button-pages :text="'Abonnez-vous'" :route="'#'" :class="'block bg-persian-plum-900 text-white w-60 text-center'" :size="'sm'"
                            :variant="'bg'" :weight="'solid'" />
                    </div>
                </div>
            </div>
        </div>
    </section>



    @push('body::scripts')
        {{--  script slider   --}}
        <script>
            function BrandData() {
                return {
                    currentIndex: 0,
                    visibleItems: window.innerWidth >= 1024 ? 4 : (window.innerWidth >= 768 ? 3 : 2),
                    brands: [{
                            name: 'Ramonsoler',
                            image: '{{ asset('assets/image-page-accuiel/logo-silder1.png') }}',

                        },
                        {
                            name: 'MESATEKNIK',
                            image: '{{ asset('assets/image-page-accuiel/logo-silder1.png') }}'
                        },
                        {
                            name: 'DIAMOND',
                            image: '{{ asset('assets/image-page-accuiel/logo-silder1.png') }}'
                        },
                        {
                            name: 'DIAMOND',
                            image: '{{ asset('assets/image-page-accuiel/logo-silder1.png') }}'
                        },
                        {
                            name: 'DIAMOND',
                            image: '{{ asset('assets/image-page-accuiel/ramon-Soler-logo.png') }}'
                        },
                        {
                            name: 'DIAMOND',
                            image: '{{ asset('assets/image-page-accuiel/mesa.png') }}'
                        },
                        {
                            name: 'DIAMOND',
                            image: '{{ asset('assets/image-page-accuiel/mesa.png') }}'
                        },
                        {
                            name: 'ZENITH',
                            image: '{{ asset('assets/image-page-accuiel/mesa.png') }}'
                        },
                        {
                            name: 'ZENITH',
                            image: '{{ asset('assets/image-page-accuiel/mesa.png') }}'
                        },
                        {
                            name: 'ZENITH',
                            image: '{{ asset('assets/image-page-accuiel/mesa.png') }}'
                        },
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
