<!-- resources/views/components/button.blade.php -->
@props([
    'size' => 'md',
    'outline' => false,
    'text' => 'Button',
])

@php
    $classes = [
        'block',
        'cursor-pointer',
        'rounded-lg',
        'font-medium',
        'text-black',
        'tracking-wide',
        "px-7 py-3 md:px-14 md:py-4", // default padding
    ];

    // Handle size variations
    if ($size === 'lg') {
        $classes[] = 'text-lg';
    } elseif ($size === 'sm') {
        $classes[] = 'text-sm';
    } elseif ($size === 'xl'){
        $classes[] = 'text-xl';
    }

    // Handle color
    $classes[] = $outline ? 'border-2 border-cobalt-800 text-cobalt-800 bg-transparent' : 'bg-cobalt-800';

    // Merge any additional classes passed via the component
    $classes = implode(' ', $classes);
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $text }}
</button>
