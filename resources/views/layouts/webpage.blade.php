<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Tienda deportiva')</title>

    {{-- Estilo para establecer un fondo a la sección de presentación --}}
    <style>
        .presentation-section{
            background-image: url({{ asset('assets/img/tenis.webp') }})
        }
    </style>

    {{-- Estilos de Tailwind CSS --}}
    @vite('resources/css/app.css')
</head>
<body>
    @php
        // Links de navegación para mostrar en el encabezado y pie de página
        $links = [
            [
                'name' => 'Inicio',
                'route_name' => 'index'
            ],
            [
                'name' => 'Tienda',
                'route_name' => 'store.index'
            ],
            [
                'name' => 'Sobre nosotros',
                'route_name' => 'about_us'
            ]
        ];
    @endphp
    
    {{-- Encabezado --}}
    @include('layouts._partials.header')

    {{-- Contenido principal --}}
    <main class="pt-16 pb-3">
        @yield('main')
    </main>

    {{-- Pie de página --}}
    @include('layouts._partials.footer')

    {{-- Código JS para cargar alpine.js --}}
    @vite('resources/js/app.js')
</body>
</html>