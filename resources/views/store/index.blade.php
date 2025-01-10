@php
    $webpageRouteName = 'store.index';
@endphp

@extends('layouts.webpage')

@section('main')
    <x-presentation-section>
        <x-slot name="title">Tienda</x-slot>
        <p>Aquí puedes consultar todos los productos que ofrece nuestra tienda</p>
    </x-presentation-section>

    @foreach ($categories as $category)
        <section>
            <x-heading type="h1" class="text-center">Productos de la categoría <span
                    class="text-green-600">{{ $category }}</span></x-heading>

            <x-products-grid>
                @foreach ($productList[$category] as $product)
                    <x-product-card product_slug="{{ $product->slug }}"
                        img_href="{{ asset('/assets/img/' . $product->slug . '.webp') }}" price="{{ $product->price }}" class="mx-auto">
                        <x-slot name="title">{{ $product->name }}</x-slot>
                    </x-product-card>
                @endforeach
            </x-products-grid>
        </section>
    @endforeach
@endsection
