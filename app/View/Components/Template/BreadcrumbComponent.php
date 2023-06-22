<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadcrumbComponent extends Component
{
    public $breadcru = [ // Configuración para las migas de pan
        'activexx' => '', // Clase activa para el elemento actual de las migas de pan
        'linkxxxx' => [ // Enlaces de las migas de pan
            ['tituloxx' => 'Home', 'activexx' => ''], // Título y clase activa para el enlace de inicio
        ],
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.breadcrumb-component');
    }
}
