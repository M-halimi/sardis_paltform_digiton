<a {{ $attributes->merge(['class' => "font-bold hover:text-carrot-orange-400 " . ($active ? ' text-carrot-orange-400 ': ' text-gray-600 ')]) }}>
    {{ $slot }}
</a>
