@php
    $webpageRouteName = 'store.search';
@endphp

@extends('layouts.webpage')

{{-- Mostrar el query de la búsqueda en el título --}}
@section('title', "Buscar \"$query\" - Tienda deportiva")

@section('main')
    <x-heading type="h1" class="text-center">Resultados de la búsqueda "{{ $query }}"</x-heading>

    <x-products-grid>
        @foreach ($products as $product)
            <x-product-card product_slug="{{ $product->slug }}"
                img_href="{{ asset('/assets/img/' . $product->slug . '.webp') }}" price="{{ $product->price }}" class="mx-auto">
                <x-slot name="title">{{ $product->name }}</x-slot>
            </x-product-card>
        @endforeach
    </x-products-grid>
@endsection
