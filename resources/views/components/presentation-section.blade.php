{{-- Sección de presentación (sección principal) --}}

{{-- Contenedor de la sección, con un fondo que se debe indicar --}}
<section class="presentation-section bg-cover h-96 flex justify-center items-center">
    {{-- Contenido de la sección --}}
    <div class="bg-white/80 rounded-xl text-center mx-4 p-4 max-w-96">
        {{-- Título --}}
        <x-heading type="h1" class="text-green-600 mt-2">{{ $title }}</x-heading>

        {{-- Contenido adicional --}}
        {{ $slot }}
    </div>
</section>