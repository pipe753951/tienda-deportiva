@switch($showAs)
    {{-- Se muestra si se indica que el boton es un enlace --}}
    @case('a')
        <a {{ $attributes->merge(['class' => $defaultClass . $additionalClass]) }}>
            {{ $slot }}
        </a>
        @break
    
    {{-- Se muestra si no se indica la etiqueta del boton (Se usa la etiqueta button por defecto) --}}
    @default
        <button {{ $attributes->merge(['class' => $defaultClass . $additionalClass]) }}>
            {{ $slot }}
        </button>
@endswitch
