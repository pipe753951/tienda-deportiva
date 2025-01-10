{{-- Pie de página del sitio web. Se divide en "secciones" para organizar el conenido --}}
<footer class="bg-gray-200 px-7 pt-2 pb-7 min-h-64 md:flex md:flex-wrap md:justify-around">
    {{-- Sección principal. Se muestra el nombre del sitio y un formulario de inscripción al boletín de noticias --}}
    <div class="mx-2 md:max-w-96 md:flex-1">
        {{-- Nombre del sitio --}}
        <x-heading type="h1" class="text-green-600">Tienda deportiva</x-heading>

        {{-- Formulario de inscripción al boletin de noticias --}}
        <x-heading type="h3">¡Suscribete a nuestro boletín de noticias!</x-heading>

        <form action="{{ route('newsletter.subscribe') }}" method="post">
            @csrf

            {{-- Input: correo --}}
            <div>
                <label for="email">Correo electrónico</label>
                <x-form-input class="w-full" type="text" id="email" name="email"
                    placeholder="correo@correo.com">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </x-slot>
                </x-form-input>
            </div>

            @error('email')
                <p class="text-red-600 font-semibold">{{ $message }}</p>
            @enderror

            @if (Session::get('success'))
                @php $message = Session::get('success') @endphp
                <p class="text-green-600 font-semibold">{{ $message }}</p>
            @endif

            {{-- Boton de enviar formulatio --}}
            <x-button class="mt-2" color_type="primary" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>

                Enviar
            </x-button>
        </form>
    </div>

    {{-- Sección de links del sitio y contacto --}}
    <div class="mx-2 max-w-96 flex-1">
        {{-- Links del sitio --}}
        <x-heading type="h1" class="text-green-600">Links</x-heading>

        {{-- Lista de links --}}
        <x-list-ul>
            @foreach ($links as $link)
                <li>
                    <x-link href="{{ route($link['route_name']) }}">{{ $link['name'] }}</x-link>
                </li>
            @endforeach
        </x-list-ul>

        <x-heading type="h1" class="text-green-600">Contacto y horario</x-heading>
        {{-- Contacto --}}
        <address class="leading-relaxed not-italic">
            {{-- Dirección --}}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <span>
                    Calle 00 A 00A 12
                </span>
            </span><br>

            {{-- Correo --}}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <span>
                    Calle 00 A 00A 12
                </span>
            </span><br>

            {{-- Horario --}}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span>
                    lunes a domingo: 11:00 a.m - 8:00 p.m
                </span>
            </span><br>
        </address>
    </div>
</footer>
