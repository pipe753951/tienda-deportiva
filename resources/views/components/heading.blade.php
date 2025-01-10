@props(['type'])

@php
    // Clases por defecto del título
    $defaultClass = "font-bold my-4 ";
@endphp

{{-- Se averigua qué tipo de título que se estableció y se muestra el título con ciertas clases adicionales --}}
@switch($type)
    @case('h1')
        <h1 {{ $attributes->merge(['class' => $defaultClass . "text-4xl"]) }}>{{ $slot }}</h1>
        @break
    @case('h2')
        <h2 {{ $attributes->merge(['class' => $defaultClass . "text-3xl"]) }}>{{ $slot }}</h2>
        @break
    @case('h3')
        <h3 {{ $attributes->merge(['class' => $defaultClass . "text-2xl"]) }}>{{ $slot }}</h3>
        @break
@endswitch