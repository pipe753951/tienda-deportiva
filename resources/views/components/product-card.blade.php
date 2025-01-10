{{-- Propiedad 'href' de la imagen de la tarjeta --}}
@props(['img_href', 'product_slug', 'price'])

{{-- Tarjeta que muestra la imagen, el título y el precio del producto, además de opciones de compra --}}
<div
    {{ $attributes->merge(['class' => 'overflow-hidden border-2 border-gray-400 bg-gray-50 rounded-2xl flex flex-col min-h-80 w-72']) }}>
    {{-- Imagen del producto --}}
    <a href="{{ route('store.show', $product_slug) }}">
        <img class="aspect-[16/10] object-cover" src="{{ $img_href }}" alt="Imagen">
    </a>

    {{-- Titulo y precio del producto --}}
    <div class="mx-4 flex-1">
        {{-- Título --}}
        <x-heading type="h2">{{ $title }}</x-heading>
        <div class="text-2xl text-green-600 font-semibold my-2">${{ $price }}</div>

        {{-- Contenido adicional --}}
        {{ $slot }}
    </div>

    {{-- Opciones del producto --}}
    <div class="mx-4 my-3">
        {{-- Opción: obtener más información --}}
        <x-button showAs="a" href="{{ route('store.show', $product_slug) }}" colorType="info" class="flex w-full">
            {{-- Icono --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>

            Más información
        </x-button>
    </div>
</div>
