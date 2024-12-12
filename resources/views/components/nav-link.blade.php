<a {{ $attributes->merge(['class' => "font-bold hover:text-carrot-orange-400 " . (request()->is('your-condition') ? 'text-carrot-orange-400' : 'text-gray-600')]) }}>
    {{ $slot }}
</a>
