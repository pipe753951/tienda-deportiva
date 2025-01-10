@php
    // Variable que guarda el nombre de la ruta que utiliza esta vista, en este caso, está vacío
    $webpageRouteName = '';
@endphp

@extends('layouts.webpage')

@section('title', 'No encontrado - Tienda deportiva')

@section('main')
    <section class="text-lg text-center mx-auto px-2 py-8 h-screen max-w-xl">
        <div class="font-bold text-9xl text-red-600">404</div>
        <x-heading type="h1" class="text-red-600">Página no encontrada</x-heading>
        <p class="my-2">Lo sentimos, no podemos encontrar la URL o el producto que estás buscando, es posible que ya no
            esté disponible.</p>
        <p class="my-2">Por favor, comprueba la URL, e intentalo de nuevo.</p>

        <x-button href="{{ route('index') }}" showAs="a">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Volver al inicio
        </x-button>
    </section>
@endsection
