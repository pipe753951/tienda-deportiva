@props([
    'has_icon' => 'yes', // Propiedad que indica si el input tiene un icono
    'container_class' => '' // Clases del contenedor del input
])

@php
    // Desasigna los atributos al contenedor del input para asignarlos directamente al input, guardando los atributos en una variable aparte
    $inputAttributes = $attributes;
    $attributes = NULL;

    // Variable de clases adicionales para el contenedor del input
    $additionalContainerClass = '';

    // Se añade una variable de clases adicionales para el input
    $additionalInputClass = '';

    // Se analiza si al input se indicará un icono, y se establece cuales son las clases adicionales si se indica si hay un icono o no
    if ($has_icon === 'yes') {
        $additionalContainerClass = 'relative';
        $additionalInputClass = 'pl-9 pr-3';
    }
    else {
        $additionalInputClass = 'px-3';
    }
@endphp

{{-- Contenedor del input --}}
<div class="{{ "h-10 " . $container_class . " " . $additionalContainerClass }}">
    {{-- Si se indica que hay un icono, se inserta el icono indicado en el slot "icon" --}}
    @if ($has_icon === "yes")
        {{-- Icono --}}
        <div class="text-gray-600 size-6 absolute inset-y-0 my-auto ml-2">
            {{ $icon }}
        </div>
    @endif

    {{-- Input --}}
    <input {{ $inputAttributes->merge(['class' => "border border-gray-300 outline-green-500 bg-white h-full rounded-lg shadow-sm placeholder:text-gray-500 $additionalInputClass", 'value' => $slot ?? '']) }}>
</div>
