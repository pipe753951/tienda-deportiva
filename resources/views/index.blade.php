@php
    // Variable que guarda el nombre de la ruta que utiliza esta vista
    $webpageRouteName = 'index';
@endphp

@extends('layouts.webpage')

@section('main')
    {{-- Sección de bienvenida --}}
    <x-presentation-section>
        <x-slot name="title">¡Bienvenido!</x-slot>
        Aquí encontrarás artículos deportivos.
    </x-presentation-section>

    {{-- Sección de lista de productos --}}
    <section>
        <x-heading type="h1" class="text-center">Nuestros productos más populares</x-heading>

        <x-products-grid>
            @foreach ($products as $product)
                <x-product-card product_slug="{{ $product->slug }}" img_href="{{ asset('/assets/img/' . $product->slug . '.webp') }}" price="{{ $product->price }}" class="mx-auto">
                    <x-slot name="title">{{ $product->name }}</x-slot>
                </x-product-card>
            @endforeach
        </x-products-grid>

        {{-- Secciones de imagen de prueba --}}
        <x-img-section img_src="{{ asset('/assets/img/tenis.webp') }}">
            <x-slot name="title">Sección</x-slot>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt modi iusto, ipsum deserunt, incidunt iure voluptas quisquam quos, recusandae aspernatur natus. Sunt quasi atque at molestiae accusamus exercitationem dolorum beatae.</p>
        </x-img-section>

        <x-img-section img_src="{{ asset('/assets/img/pelota_beisbol.webp') }}" reverse="yes">
            <x-slot name="title">Sección 2</x-slot>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt modi iusto, ipsum deserunt, incidunt iure voluptas quisquam quos, recusandae aspernatur natus. Sunt quasi atque at molestiae accusamus exercitationem dolorum beatae.</p>
        </x-img-section>
    </section>
@endsection
