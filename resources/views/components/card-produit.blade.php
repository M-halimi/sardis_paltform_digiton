@props([
    'imageUrl',
    'brand' => 'Brand',
    'productName' => 'Product Name',
    'rating' => 4
])

<div
    x-data="{ isHovered: false }"
    class="group w-72 bg-white border border-gray-200 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
    x-on:mouseenter="isHovered = true"
    x-on:mouseleave="isHovered = false"
>
    <div class="relative overflow-hidden">
        <img
            src="{{ $imageUrl }}"
            alt="Product"
            class="w-full h-80 object-cover transition-transform duration-300 group-hover:scale-110"
        />

        <template x-if="isHovered">
            <a href="{{ route('boutique.show') }}">
            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center space-x-4 transition-all duration-300">
                <button
                    class="bg-white p-2 rounded-full hover:bg-gray-100 transition-colors"
                    aria-label="Quick View"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>
        </a>
        </template>
    </div>

    <div class="p-4 bg-gray-100/50">
        <div class="flex justify-between items-center mb-2">
            <span class="text-xs uppercase text-gray-500">{{ $brand }}</span>
            <div class="flex">
                @for ($i = 1; $i <= 5; $i++)
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 {{ $i <= $rating ? 'text-yellow-500' : 'text-gray-300' }}"
                        fill="{{ $i <= $rating ? 'currentColor' : 'none' }}"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                        />
                    </svg>
                @endfor
            </div>
        </div>

        <div class="flex justify-between items-center gap-2 ">
            <h3 class="text-lg font-semibold text-gray-800 truncate">
                {{ $productName }}
            </h3>
                 <div class="">
                    <button
                    class="bg-tango-500 text-white p-2 rounded-full hover:bg-tango-600 transition-colors"
                    aria-label="Add to Cart"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </button>

              </div>


        </div>



    </div>
</div>
