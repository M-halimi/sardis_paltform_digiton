<x-guest-layout>
    @slot('title', "Votre Fournisseur de Robinetterie et Accessoires Sanitaires au Maroc")
    @slot('site_description',"Fournisseur exclusif de ramonsoler au maroc")

    <header>
        <div
            class="max-h-screen flex flex-col items-center justify-center bg-cover backdrop-blur-sm object-cover aspect-square bg-center w-full py-6 md:py-0"
            style=" background-image: url('{{ asset('assets/image-cover/clean-bright-bathroom.png') }}'), linear-gradient(rgba(45,55,72,2), rgba(45,55,72,2));background-size: cover; background-position: center; background-blend-mode: overlay;">
            <div class="max-w-7xl mx-auto space-y-4 md:space-y-6">
                <h1 class="text-3xl md:text-4xl lg:text-6xl text-white tracking-wider max-w-6xl text-carrot-orange-400 text-center font-bold px-4 py-2 lg:px-2">
                    Votre Fournisseur de Robinetterie et Accessoires Sanitaires au Maroc
                </h1>

                <p class="max-w-4xl mx-auto font-semibold block text-tango-500 tracking-wide !leading-9 text-center md:text-3xl  px-4 lg:px-0">
                    Fournisseur exclusif de ramonsoler au maroc
                </p>
            </div>
            <div
                class="flex flex-col md:flex-row md:items-center md:justify-center mb-8 md:mb-0 py-2 translate-y-6 md:translate-y-12  space-y-4 md:space-y-0 md:space-x-20">
                <x-button-pages :text="'Nos produis'" :route="'#'"
                                :class="'bg-persian-plum-900 text-white w-60 text-center'" :size="'lg'" :variant="'bg'"
                                :weight="'solid'"/>
                <x-button-pages :text="'Contact'" :route="'#'" :class="'bg-white text-black w-60 text-center'"
                                :size="'lg'" :variant="'bg'" :weight="'solid'"/>
            </div>
        </div>
    </header>
    {{--  end header  --}}
    <section class="max-w-7xl mx-auto py-4 md:py-8">
        <div class="flex flex-col justify-center items-center space-y-2 md:space-y-4">
            <h2 class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wider">
                Robinetterie et Produits Sanitaires Haut de Gamme au Maroc
            </h2>
            <p class="text-lg md:text-3xl tracking-wide text-tango-500 font-semibold">
                Explorez Notre Collection de Produits
            </p>
        </div>
    </section>
    {{--  end section for titre  --}}
    <section class="max-5xl lg:max-w-7xl mx-auto bg-cobalt-950 px-6 md:px-8 rounded-3xl mt-6">
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-14 py-4 md:py-8 px-4 md:px-10 translate-y-6">
            {{--card 1--}}
            <div class="relative w-full max-w-sm">
                <img src="{{asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png')}}"
                     width="100"
                     class="rounded-t-3xl object-cover w-full aspect-square max-h-80"
                     loading="lazy"
                     alt="Robinetterie-élégante-et-durable"
                     height="100"
                />
                <h3 class="absolute bg-persian-plum-900 rounded-b-lg w-full text-white text-center text-2xl py-4">
                    Robinetterie
                </h3>
                <div class="flex justify-center items-center px-8 mx-auto">
                    <p class="text-lg md:text-xl mt-12 py-6 md:py-12 text-white tracking-wider">
                        Robinetterie élégante et durable pour toutes vos installations sanitaires.
                    </p>
                </div>
            </div>

            {{--card 2--}}
            <div class="relative w-full">
                <img src="{{asset('assets/image-page-accuiel/mitigeurs-de-cuisine-modernes-alliant.png')}}"
                     width="100"
                     class="rounded-t-3xl object-cover w-full aspect-square max-h-80"
                     loading="lazy"
                     alt="Mitigeurs-de-cuisine-modernes-alliant"
                     height="100"
                />
                <h3 class="absolute bg-persian-plum-900 rounded-b-lg w-full text-white text-center text-2xl py-4">
                    Mitigeurs de cuisine
                </h3>
                <div class="flex justify-center items-center px-8 mx-auto">
                    <p class="text-lg md:text-xl mt-12 py-6 md:py-12 text-white tracking-wider">
                        Mitigeurs de cuisine modernes alliant praticité et design élégant.
                    </p>
                </div>
            </div>

            {{--card 3--}}
            <div class="relative w-full md:mx-auto">
                <img src="{{asset('assets/image-page-accuiel/accessoires-de-salle-de-bain-stylés.png')}}"
                     width="100"
                     class="rounded-t-3xl object-cover w-full aspect-square max-h-80"
                     loading="lazy"
                     alt="Accessoires-de-salle-de-bain-stylés.png"
                     height="100"
                />
                <h3 class="absolute bg-persian-plum-900 tracking-tight rounded-b-lg w-full text-white text-center text-2xl py-4">
                    Accessoires de salle de bain
                </h3>
                <div class="px-8">
                    <p class="text-lg md:text-xl mt-12 py-6 md:py-12 text-white tracking-wider">
                        Accessoires de salle de bain stylés pour un confort optimal.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{--  end section Explorez Notre Collection de Produits  --}}

    {{--  section Pourquoi Choisir Sardis ?   --}}
    <section class="max-w-7xl mx-auto py-4 md:py-8">
        <div class="flex flex-col justify-center items-center px-4 md:px-8">
            <h2 class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wider">
                Pourquoi Choisir Sardis ?
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-8 px-2 md:px-4 py-4 md:py-8 mt-6">
                <div class="">
                    <img
                        src="{{asset('assets/image-page-accuiel/sardis-grossiste-en-articles-sanitaires-robinetterie-et-accessoires.png')}}"
                        width="100"
                        height="100"
                        alt="sardis-grossiste-en-articles-sanitaires-robinetterie-et-accessoires"
                        loading="lazy"
                        class="w-full rounded-3xl object-cover"
                    />
                </div>

                <div class="flex justify-center items-center">
                    <p class="font-normal max-w-xl md:px-8 px-1.5 text-lg tracking-wider leading-relaxed text-justify">
                        SARDIS, grossiste en articles sanitaires, robinetterie et accessoires de salle de bain,
                        est implantée à Casablanca depuis 2009. Avec une équipe compétente et dynamique,
                        SARDIS se distingue sur le marché marocain par une gamme de produits alliant qualité et
                        durabilité.
                        Notre stratégie ? Offrir le meilleur rapport qualité-prix pour tous types de projets,
                        du standard économique au haut standing, grâce à une riche sélection de marques.
                        En plus, nous garantissons un service exemplaire avec des délais de livraison fiables,
                        un circuit de distribution efficace et un service après-vente réactif, incluant la disponibilité
                        des pièces de rechange.
                    </p>
                </div>

            </div>
        </div>
    </section>
    {{--  end section for Pourquoi Choisir Sardis ?  --}}

    {{--  section C’est quoi ramonsoler ?   --}}
    <section class="max-w-7xl mx-auto py-4">
        <div class="flex flex-col justify-center items-center px-4 md:px-8">
            <h2 class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wider">
                C’est quoi ramonsoler ?
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-8 px-2 md:px-4 py-4 md:py-8 mt-6">
                <div class="lg:order-2">
                    <img
                        src="{{asset('assets/image-page-accuiel/depuis-1890-ramonsoler-est-le-leader-de-la-fabrication.png')}}"
                        width="100"
                        height="100"
                        alt="depuis-1890-ramonsoler-est-le-leader-de-la-fabrication"
                        loading="lazy"
                        class="w-full rounded-3xl object-cover"
                    />
                </div>

                <div class="flex justify-center items-center">
                    <p class="font-normal max-w-xl md:px-8 px-1.5 text-lg tracking-wider leading-relaxed text-justify lg:order-1">
                        Depuis 1890, ramonsoler est le leader de la fabrication de robinetterie et d’accessoires de
                        salle de bain de haute qualité.
                        La marque propose une large gamme de robinets, mitigeurs de cuisine et accessoires de salle de
                        bain,
                        alliant performance écoénergétique, design esthétique, confort et fiabilité. Basée à Barcelone,
                        ramonsoler dispose de plus de 16 000 m² d’installations et respecte les normes les plus strictes
                        en matière de certification.
                        Présente à l'international, la marque est fière de ses produits certifiés. Chez Sardis Maroc,
                        nous sommes le partenaire exclusif de ramonsoler au Maroc,
                        vous offrant un accès direct à ces produits haut de gamme pour vos besoins en robinetterie et
                        accessoires de salle de bain.
                    </p>
                </div>

            </div>
        </div>
    </section>
    {{--  end section C’est quoi ramonsoler ? --}}
    {{--  section slider   --}}
    <section class="max-w-7xl mx-auto py-4">
        <div class="flex flex-col justify-center items-center px-4 md:px-8 space-y-4">
            <h2 class="font-bold lg:text-4xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wider">
                Marques et Produits Disponibles
            </h2>
            <p class="font-semibold max-w-sm md:text-3xl text-center text-lg text-tango-500 tracking-wide">
                Explorez nos marques de robinetterie et produits sanitaires
            </p>
        </div>
    </section>
    <section class="max-w-5xl mx-auto py-8 px-4 lg:px-14">
        <div x-data="brandSlider()" class="w-full max-w-7xl mx-auto relative">
            <div class="overflow-hidden relative">
                <div class="flex justify-center items-center transition-transform duration-500 ease-in-out"
                     :style="getTransformStyle()">
                    <template x-for="(brand, index) in brands" :key="index">
                        <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
                            <button
                                class="block bg-white shadow-lg rounded-3xl overflow-hidden transition-all duration-300 hover:ring-4 hover:ring-blue-500"
                                :class="{'ring-4 ring-blue-500': isActive(index)}">
                                <div class="h-52 flex items-center justify-center px-2">
                                    <img :src="brand.image" :alt="brand.name"
                                         width="200"
                                         height="200"
                                         class="max-w-full max-h-full object-cover"/>
                                </div>
                                <!-- Title Section -->
                            </button>
                            <div class="mt-4 text-center">
                                <span class="text-lg font-semibold text-gray-800" x-text="brand.name"></span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button @click="prev()"
                    class="absolute left-4 top-1/2 -translate-x-8 md:-translate-x-16 -translate-y-1/2 bg-blue-700 rounded-full p-3 text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed z-20"
                    :disabled="currentIndex === 0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button @click="next()"
                    class="absolute right-4 top-1/2 translate-x-8 md:translate-x-16 -translate-y-1/2 bg-blue-700 rounded-full p-3 text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed z-20"
                    :disabled="currentIndex >= maxIndex()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
    </section>



    {{--  section  --}}

    <section class="max-w-7xl mx-auto py-4">
        <div class="flex flex-col justify-center items-center px-4 md:px-8">
            <h4 class="font-bold lg:text-3xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wider">
                les produits coup de coeur
            </h4>
        </div>
        <div class="grid grid-rows-2 gap-4 mt-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 mt-8">
                <!-- Product Card -->
                <div class="border rounded-3xl shadow-md overflow-hidden">
                    <img src="{{asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png')}}"
                         alt="Product Image" class="w-full max-h-72 object-cover bg-center aspect-square rounded-t-3xl"
                         width="100" height="100">
                    <div class="p-4 text-center flex flex-col justify-center items-center space-y-4">
                        <h5 class="font-semibold text-lg">Titre produit</h5>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white w-60 text-center'" :size="'lg '" :variant="'bg'"
                                        :weight="'solid'"/>
                    </div>
                </div>
                <!-- Duplicate for other cards -->
                <div class="border rounded-3xl shadow-md overflow-hidden">
                    <img src="{{asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png')}}"
                         alt="Product Image" class="w-full max-h-72 object-cover bg-center aspect-square rounded-t-3xl"
                         width="100" height="100">
                    <div class="p-4 text-center flex flex-col justify-center items-center space-y-4">
                        <h5 class="font-semibold text-lg">Titre produit</h5>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white w-60 text-center'" :size="'lg '" :variant="'bg'"
                                        :weight="'solid'"/>
                    </div>
                </div>
                <div class="border rounded-3xl shadow-md overflow-hidden">
                    <img src="{{asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png')}}"
                         alt="Product Image" class="w-full max-h-72 object-cover bg-center aspect-square rounded-t-3xl"
                         width="100" height="100">
                    <div class="p-4 text-center flex flex-col justify-center items-center space-y-4">
                        <h5 class="font-semibold text-lg">Titre produit</h5>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white w-60 text-center'" :size="'lg '" :variant="'bg'"
                                        :weight="'solid'"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 mt-8">
                <!-- Product Card -->
                <div class="border rounded-3xl shadow-md overflow-hidden">
                    <img src="{{asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png')}}"
                         alt="Product Image" class="w-full max-h-72 object-cover bg-center aspect-square rounded-t-3xl"
                         width="100" height="100">
                    <div class="p-4 text-center flex flex-col justify-center items-center space-y-4">
                        <h5 class="font-semibold text-lg">Titre produit</h5>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white w-60 text-center'" :size="'lg '" :variant="'bg'"
                                        :weight="'solid'"/>
                    </div>
                </div>
                <!-- Duplicate for other cards -->
                <div class="border rounded-3xl shadow-md overflow-hidden">
                    <img src="{{asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png')}}"
                         alt="Product Image" class="w-full max-h-72 object-cover bg-center aspect-square rounded-t-3xl"
                         width="100" height="100">
                    <div class="p-4 text-center flex flex-col justify-center items-center space-y-4 ">
                        <h5 class="font-semibold text-lg">Titre produit</h5>
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white w-60 text-center'" :size="'lg '" :variant="'bg'"
                                        :weight="'solid'"/>
                    </div>
                </div>
                <div class="border rounded-3xl shadow-md overflow-hidden">
                    <img src="{{asset('assets/image-page-accuiel/robinetterie-élégante-et-durable.png')}}"
                         alt="Product Image" class="w-full max-h-72 object-cover bg-center aspect-square rounded-t-3xl"
                         width="100" height="100">
                    <div class="p-4 text-center flex flex-col justify-center items-center space-y-4">
                        <h5 class="font-semibold text-lg">Titre produit</h5>
{{--                        <button class="mt-4 bg-persian-plum-900 text-white py-4 px-4 rounded-lg w-56">More Detail</button>--}}
                        <x-button-pages :text="'More Detail'" :class="'bg-persian-plum-900 text-white w-60 text-center'" :size="'lg '" :variant="'bg'"
                                        :weight="'solid'"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  ensd section  --}}

    <section class="max-w-5xl mx-auto py-4">
        <div class="flex flex-col justify-center items-center px-4 md:px-8">
            <h2 class="font-bold lg:text-3xl max-w-5xl md:px-14 md:text-2xl px-4 text-center text-cobalt-950 text-lg tracking-wider">
                Espace Informations
            </h2>
        </div>
        <div class="grid grid-cols-3 gap-8 py-6 items-stretch md:mt-6">
            <!-- First Image -->
            <img
                src="{{ asset('assets/image-page-accuiel/espace-1.png') }}"
                alt="espace-1"
                width="100"
                height="100"
                class="w-full bg-cover bg-center object-cover rounded-3xl col-span-1"
            />

            <!-- Right Section -->
            <div class="grid space-y-4 gap-4     col-span-2">
                <!-- Upper Section -->
                <div class="grid grid-cols-2 gap-8">
                    <!-- Blog Article Card -->
                    <div class="relative w-full">
                        <img src="{{asset('assets/image-page-accuiel/espace-informations.png')}}"
                             class="animate-pulse object-cover max-h-40 relative rounded-t-lg w-full"
                             alt="espace-informations"
                             width="100"
                             height="100"
                             loading="lazy">
                        <p class="-translate-y-2 absolute bg-persian-plum-900 inset-x-0 py-3 rounded-b-lg text-2xl text-center text-white">
                            Article Blog 1
                        </p>
                    </div>

                    <!-- PDF Guide Card -->
                    <div class="aspect-square bg-alto-200 flex flex-col items-center justify-center max-h-52 mx-auto rounded-3xl space-y-4 w-full">
                        <p class="font-semibold md:text-xl text-lg text-center tracking-wider px-8">
                            Guide en PDF (livre blanc)
                        </p>
                        <a href="#">
                            <button class="bg-persian-plum-900 text-white text-center px-6 py-2 rounded-lg" >
                                Télécharger
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Lower Section: Placeholder for Video or Image -->
                <div class="w-full  relative">
                    <img
                        src="{{ asset('assets/image-page-accuiel/photoforendsection.png') }}"
                        alt="photoforendsection"
                        width="100"
                        height="100"
                        class="w-full rounded-3xl"
                    />
                    <p class="absolute inset-0 flex justify-center items-center">
                        <svg width="77" height="84" viewBox="0 0 77 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M69 28.1436C79.6667 34.302 79.6667 49.698 69 55.8564L24 81.8372C13.3333 87.9956 3.24525e-06 80.2976 3.78363e-06 67.9808L6.05494e-06 16.0192C6.59333e-06 3.70242 13.3333 -3.99557 24 2.16283L69 28.1436Z" fill="#6E1A26"/>
                        </svg>
                    </p>
                </div>

            </div>
        </div>


    </section>

    @push('body::scripts')
        <script>
            function brandSlider() {
                return {
                    currentIndex: 0,
                    visibleItems: 4, // Default for desktop
                    brands: [
                        { name: 'Ramonsoler', image: '{{ asset("assets/image-page-accuiel/Ramon-Soler_logo*1__1*-removebg-preview.png") }}' },
                        { name: 'Mesateknik', image: '{{ asset("assets/image-page-accuiel/Ramon-Soler_logo*1__1*-removebg-preview.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/logo-silder1.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/logo-silder1.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/ramon-Soler-logo.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}' },
                        { name: 'Diamond', image: '{{ asset("assets/image-page-accuiel/mesa.png") }}' },
                    ],
                    maxIndex() {
                        return Math.max(0, this.brands.length - this.visibleItems);
                    },
                    getTransformStyle() {
                        const translateX = this.currentIndex * -(50 / this.visibleItems);
                        return `transform: translateX(${translateX}%);`;
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
                    updateVisibleItems() {
                        const width = window.innerWidth;
                        if (width < 430) {
                            // Phone
                            this.visibleItems = 1;
                        } else if (width >= 768 && width < 1024) {
                            // iPad or small tablets
                            this.visibleItems = 2;
                        } else if (width >= 1024 && width < 1440) {
                            // Medium-sized screens
                            this.visibleItems = 3;
                        } else {
                            // Large screens
                            this.visibleItems = 4;
                        }

                        // Ensure currentIndex is within bounds
                        if (this.currentIndex > this.maxIndex()) {
                            this.currentIndex = this.maxIndex();
                        }
                    },
                    init() {
                        this.updateVisibleItems();
                        window.addEventListener('resize', () => this.updateVisibleItems());
                    }
                };
            }
        </script>

    @endpush

</x-guest-layout>