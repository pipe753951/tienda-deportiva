@php
    // Variable que guarda el nombre de la ruta que utiliza esta vista
    $webpageRouteName = 'about_us';
@endphp

@extends('layouts.webpage')

@section('title', 'Sobre nosotros - Tienda deportiva')

@section('main')
    {{-- Sección de presentacion --}}
    <x-presentation-section>
        <x-slot name="title">Conozcanos</x-slot>
        <p>Somos una tienda deportiva dedicada a verder artículos para cualquier tipo de deporte.</p>
    </x-presentation-section>

    {{-- Secciones de imagen de prueba --}}
    <x-img-section img_src="{{ asset('/assets/img/tenis.webp') }}">
        <x-slot name="title">Sección 1</x-slot>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi numquam dicta, culpa laborum quidem dolorum totam officia nesciunt ut iusto et eligendi repudiandae voluptatibus, voluptate possimus consequuntur natus aspernatur repellat!</p>
    </x-img-section>

    <x-img-section img_src="{{ asset('/assets/img/balon_baloncesto.webp') }}" reverse="yes">
        <x-slot name="title">Sección 2</x-slot>
        <p>Ipsam, neque dolorum dignissimos perferendis accusantium nam quos quisquam officia excepturi velit laboriosam id vitae non illo corrupti in quibusdam. Eligendi delectus, nostrum mollitia neque dolore minus earum quasi facere!</p>
    </x-img-section>

    <x-img-section img_src="{{ asset('/assets/img/pesa.webp') }}">
        <x-slot name="title">Sección 3</x-slot>
        <p>Eius quam maiores omnis, odit maxime nostrum voluptas pariatur. Veniam illo debitis enim! Velit, rem corporis tempore corrupti nulla eveniet voluptate suscipit exercitationem perferendis dignissimos eaque, ut consequuntur quia cumque!</p>
    </x-img-section>

    <x-img-section img_src="{{ asset('/assets/img/bicicleta.webp') }}" reverse="yes">
        <x-slot name="title">Sección 4</x-slot>
        <p>Quos ratione obcaecati saepe officia necessitatibus sint iure repellendus. Quo earum quam neque pariatur ullam obcaecati expedita unde rem. Iure facilis eos ex, saepe veritatis accusantium repellat sed incidunt cumque.</p>
    </x-img-section>
@endsection
