{{-- Encabezado del sitio web --}}
<header x-data="{ open: false }" class="fixed top-0 inset-x-0 bg-gray-50 border-b-2 border-gray-300 shadow-lg">
    {{-- Logo, menu de escritorio, botón para mostrar el menu móvil --}}
    <div class="flex justify-center items-center h-16 px-10">
        {{-- Logo del sitio --}}
        <x-link href="{{ route('index') }}"
            class="flex-1 text-green-600 no-underline text-xl font-bold lg:flex-none">Tienda deportiva</x-link>

        {{-- Menú para escritorio --}}
        <div class="hidden lg:flex flex-1 items-center justify-end">
            {{-- Formulario de búsqueda --}}
            <form action="{{ route('store.search') }}" method="get" class="relative flex items-center mx-auto">
                @error('q')
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 mr-2 text-red-600">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd" />
                    </svg>
                @enderror

                <x-form-input name="q" placeholder="Busca aquí...">
                    {{-- Icono --}}
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </x-slot>
                </x-form-input>
            </form>

            {{-- Links de navegación --}}
            <nav>
                {{-- Se muestra cada link de navegación --}}
                @foreach ($links as $link)
                    {{-- Se revisa si la variable del nombre de la ruta que utiliza la vista principal coincide con el nombre de la ruta del link de navegación que se va a mostrar --}}
                    @php
                        if ($webpageRouteName === $link['route_name']) {
                            $linkColorType = 'link_active';
                        } else {
                            $linkColorType = 'link';
                        }
                    @endphp

                    <x-button showAs="a" colorType="{{ $linkColorType }}"
                        href="{{ route($link['route_name']) }}">{{ $link['name'] }}</x-button>
                @endforeach
            </nav>
        </div>

        {{-- Botón para mostrar menú móvil --}}
        <button x-on:click="open = true"
            class="lg:hidden border-2 border-gray-400 text-gray-500 px-4 py-2 rounded-lg hover:border-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>

    {{-- Menú para movil --}}
    <div x-show="open" x-on:click.away="open = false" class="lg:hidden border-t-2 border-gray-300 mx-2 p-3">
        {{-- Formulario de búsqueda --}}
        <form class="flex items-center" action="{{ route('store.search') }}" method="get">
            @error('q')
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-6 mr-2 text-red-600">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                </svg>
            @enderror

            {{-- Input --}}
            <x-form-input name="q" placeholder="Busca aquí..." container_class="flex-1" class="mb-3 w-full">
                {{-- Icono --}}
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </x-slot>
            </x-form-input>
        </form>

        <h1 class="my-2 font-bold">Links</h1>

        {{-- Links de navegación --}}
        <nav>
            {{-- Se muestra cada link de navegación --}}
            @foreach ($links as $link)
                {{-- Se revisa si la variable del nombre de la ruta que utiliza la vista principal coincide con el nombre de la ruta del link de navegación que se va a mostrar --}}
                @php
                    if ($webpageRouteName === $link['route_name']) {
                        $linkColorType = 'link_active';
                    } else {
                        $linkColorType = 'link';
                    }
                @endphp

                <x-button showAs="a" href="{{ route($link['route_name']) }}" colorType="{{ $linkColorType }}"
                    class="block w-full">{{ $link['name'] }}</x-button>
            @endforeach
        </nav>
    </div>
</header>
