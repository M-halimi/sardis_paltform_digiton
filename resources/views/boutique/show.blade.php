<x-guest-layout>
    @slot('title', 'Découvrez notre large gamme de produits sanitaires haut de gamme')
    @slot('site_description', 'Robinetterie, accessoires et solutions innovantes pour sublimer votre espace.')

    <div class="bg-gray-100 py-20">
        <div class="container mx-auto px-4 py-4 md:py-8">
          <div class="flex flex-wrap -mx-4">
            <!-- Product Images -->
            <div class="w-full md:w-1/2 px-7">
              <img src="{{ asset('assets/image-page-boutique/SAR553K.png') }}" alt="Product"
                          class="w-full h-[32rem] rounded-lg shadow-md mb-4 object-cover aspect-square" id="mainImage">
              <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                <img src="{{ asset('assets/image-page-boutique/SAR553K.png') }}" alt="SAR553K"
                              class="size-16 sm:size-20 h-auto object-cover aspect-square rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                              onclick="changeImage(this.src)">
                <img src="{{ asset('assets/image-page-boutique/produit-sardis2.png') }}" alt="produit-sardis2"
                              class="size-16 sm:size-20 object-cover rounded-md aspect-square cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                              onclick="changeImage(this.src)">
                <img src="{{ asset('assets/image-page-boutique/produit-sardis2.png') }}" alt="produit-sardis2"
                              class="size-16 sm:size-20 object-cover rounded-md aspect-square cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                              onclick="changeImage(this.src)">
                <img src="{{ asset('assets/image-page-boutique/SAR553K.png') }}" alt="Thumbnail 4"
                              class="size-16 sm:size-20 object-cover rounded-md aspect-square cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                              onclick="changeImage(this.src)">
              </div>
            </div>

            <!-- Product Details -->
            <div class="w-full md:w-1/2 px-4">
              <h2 class="text-3xl font-bold mb-2">KIT DOUCHETTE SEMI CARRE CLOSE BOX</h2>
              <p class="text-gray-600 mb-4">SKU: WH1000XM4</p>
              <div class="mb-4">
                <span class="text-2xl font-bold mr-2">$349.99</span>
                <span class="text-gray-500 line-through">$399.99</span>
              </div>
              <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="size-6 text-yellow-500">
                  <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="size-6 text-yellow-500">
                  <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="size-6 text-yellow-500">
                  <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="size-6 text-yellow-500">
                  <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="size-6 text-yellow-500">
                  <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
                </svg>
                <span class="ml-2 text-gray-600">4.5 (120 reviews)</span>
              </div>
              <p class="text-gray-700 mb-6">Référence : SAR555K 1130300160.</p>

              <div class="mb-6">
                <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1"
                              class="w-12 text-center rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              </div>

              <div class="flex space-x-4 mb-6">
                <button
                              class="bg-tango-500 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                  stroke-width="1.5" stroke="currentColor" class="size-6">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                              </svg>
                              Add to Cart
                          </button>
              </div>

              <div>
                <h2 class="text-lg font-semibold mb-2">Key Features:</h2>
                <ul class="list-disc list-inside text-gray-700">
                  <li>Industry-leading noise cancellation</li>
                  <li>30-hour battery life</li>
                  <li>Touch sensor controls</li>
                  <li>Speak-to-chat technology</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        {{-- Produits similaires --}}

        {{-- end titre --}}

        {{-- product Produits similaires --}}
        <section class="max-w-7xl mx-auto px-4">
            <div class="flex justify-center md:justify-start   items-start">
                    <h3 class="text-2xl text-tango-700 tracking-wider px-4 underline underline-offset-4 decoration-tango-700">
                                        PRODUITS SIMILAIRES
                    </h3>
            </div>

        <div class="grid grid-rows-2 gap-4 place-items-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 mt-8">
                <x-card-produit
                    imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                    brand="DOUCHETTE & SUPPORTS"
                    productName="Classic Running Shoe"
                    :rating="4"
                />

                <x-card-produit
                imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                brand="DOUCHETTE & SUPPORTS"
                productName="Classic Running Shoe"
                :rating="4"
                    />

                    <x-card-produit
                    imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                    brand="DOUCHETTE & SUPPORTS"
                    productName="Classic Running Shoe"
                    :rating="4"
                />

                <x-card-produit
                imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                brand="DOUCHETTE & SUPPORTS"
                productName="Classic Running Shoe"
                :rating="4"
            />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 mt-8">
                <x-card-produit
                imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                brand="DOUCHETTE & SUPPORTS"
                productName="Classic Running Shoe"
                :rating="4"
                    />

                    <x-card-produit
                    imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                    brand="DOUCHETTE & SUPPORTS"
                    productName="Classic Running Shoe"
                    :rating="4"
                />

                <x-card-produit
                imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                brand="DOUCHETTE & SUPPORTS"
                productName="Classic Running Shoe"
                :rating="4"
            />
            <x-card-produit
                imageUrl="{{ asset('assets/image-page-boutique/SAR553K.png') }}"
                brand="DOUCHETTE & SUPPORTS"
                productName="Classic Running Shoe"
                :rating="4"
            />
            </div>
        </div>
</section>
        @push('body::scripts')
                <script>
                        function changeImage(src) {
                                document.getElementById('mainImage').src = src;
                            }
                </script>
        @endpush
      </div>
</x-guest-layout>
