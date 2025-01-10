<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    // Clases de los botones por defecto
    public $defaultClass = "inline-flex items-center justify-center px-4 py-2 rounded-md hover:cursor-pointer ";

    // Clases adicionales a las clases por defecto (se aplican al definir un tipo de boton)
    public $additionalClass;

    // Propiedad que establace en que etiqueta HTML se va a mostrar el boton (a/button)
    public $showAs;

    /**
     * Create a new component instance.
     */
    public function __construct($colorType = 'primary', $showAs = 'button')
    {
        // Establecer las clases del tipo de boton
        switch ($colorType) {
            case 'primary':
                $additionalClass = 'bg-green-600 text-white hover:bg-green-700';
                break;

            case 'info':
                $additionalClass = 'bg-blue-500 text-white hover:bg-blue-600';
                break;

            case 'link':
                $additionalClass = 'text-gray-700 hover:bg-gray-200';
                break;

            case 'link_active':
                $additionalClass = 'bg-gray-300 text-black hover:bg-gray-400';
                break;
        }

        // Establecer propiedades y clases adicionales
        $this->showAs = $showAs;
        $this->additionalClass = $additionalClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
