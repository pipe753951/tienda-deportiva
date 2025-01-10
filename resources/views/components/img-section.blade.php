@props(['reverse' => 'no', 'img_src'])

@php
    $additionalClass = "";

    if($reverse === "yes"){
        $additionalClass = " md:flex-row-reverse";
    }
@endphp

{{-- Sección de imagen --}}
<section {{ $attributes->merge(['class' => 'my-7 flex flex-col-reverse md:flex-row md:justify-center' . $additionalClass]) }}>
    {{-- Contenido --}}
    <div class="w-96 mx-5">
        {{-- Titulo --}}
        <x-heading type="h1" class="text-green-600">{{ $title }}</x-heading>

        {{-- Contenido --}}
        {{ $slot }}
    </div>

    {{-- Imagen --}}
    <img class="mx-5 object-cover h-72 aspect-[4/3] lg:aspect-[16/10] rounded-xl shadow-lg" src="{{ $img_src }}" alt="img">
</section>