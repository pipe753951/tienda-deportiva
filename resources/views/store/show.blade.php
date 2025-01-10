@php
    // Variable que guarda el nombre de la ruta que utiliza esta vista
    $webpageRouteName = 'products.show';
@endphp

@extends('layouts.webpage')

@section('title', $product->name . ' - Tienda deportiva')

@section('main')
    {{-- Contenedor del producto --}}
    <div class="p-4 mb-16 max-w-5xl mx-auto sm:flex">
        {{-- Imagen del producto --}}
        <img class="mb-3 object-cover rounded-xl shadow-xl sm:mb-0 sm:h-96 sm:w-1/2 lg:w-3/5"
            src="{{ asset('/assets/img/' . $product->slug . '.webp') }}" alt="{{ $product->name }}">

        {{-- Propiedades y opciones del producto --}}
        <div class="p-3 bg-white border border-gray-300 rounded-xl shadow-xl sm:ml-4 sm:w-1/2 lg:w-2/5">
            {{-- Propiedades --}}
            {{-- Nombre del producto --}}
            <x-heading type="h1" class="mt-2">{{ $product->name }}</x-heading>

            {{-- Precio del producto --}}
            <div class="text-2xl text-green-600 font-semibold my-2">${{ $product->price }}</div>

            {{-- Descripción del producto --}}
            <p class="my-2">{{ $product->description }}</p>
        </div>
    </div>

    {{-- Sugerencias --}}
    <section>
        <x-heading type="h1" class="text-center">Sugerencias</x-heading>
        <x-products-grid>
            @foreach ($suggestions as $product)
                <x-product-card product_slug="{{ $product->slug }}"
                    img_href="{{ asset('/assets/img/' . $product->slug . '.webp') }}" price="{{ $product->price }}" class="mx-auto">
                    <x-slot name="title">{{ $product->name }}</x-slot>
                </x-product-card>
            @endforeach
        </x-products-grid>
    </section>
@endsection
