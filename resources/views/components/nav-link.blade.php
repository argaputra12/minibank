@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-primary-red border-opacity-50 text-sm font-medium leading-5 text-primary-dark focus:outline-none focus:border-opacity-100 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-primary-dark text-opacity-50 hover:text-opacity-70 hover:text-primary-dark hover:border-primary-red hover:border-opacity-30 focus:outline-none focus:text-opacity-100 focus:border-opacity-90 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
