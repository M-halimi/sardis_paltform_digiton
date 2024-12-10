<div x-data="{ expanded: false }" class="h-full flex flex-col">
    <p class="text-lg mt-4 text-black tracking-wide px-0.5 flex-grow">
        <span x-show="!expanded">{{ $shortDescription }}</span>
        <span x-show="expanded">{{ $fullDescription }}</span>
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
</div>

