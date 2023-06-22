<?php

namespace App\Http\Livewire\Template;

use Livewire\Component;

class TemplateAppLivewire extends Component
{
    public $breadcru = [ // Configuración para las migas de pan
        'activexx' => '', // Clase activa para el elemento actual de las migas de pan
        'linkxxxx' => [ // Enlaces de las migas de pan
            ['tituloxx' => 'Home', 'activexx' => ''], // Título y clase activa para el enlace de inicio
        ],
    ];
    private $parametr = [
        'breadcru' => [ // Configuración para las migas de pan
            'activexx' => '', // Clase activa para el elemento actual de las migas de pan
            'linkxxxx' => [ // Enlaces de las migas de pan
                ['tituloxx' => 'Home', 'activexx' => ''], // Título y clase activa para el enlace de inicio
            ],
        ],
        'template' => 'layouts.adminlte.template', // Ruta de la plantilla general
        'sectionx' => false // Indicador de sección (valor inicial: falso)
    ];


    public $componenteActual = 'usuariox';

    protected $listeners = [
        'cargarComponenteDesdeUsuario' => 'cargarComponenteDesdeUsuario', // Listener para el evento 'deleteUsuarioComponent'
    ];

    public function cargarComponente($componente)
    {
        $this->componenteActual = $componente;
    }

    public function cargarComponenteDesdeUsuario($componente)
    {
        Logger('se recibe');
        $this->componenteActual = $componente;
    }

    public function render()
    {
        return view('livewire.template.template-app-livewire', $this->parametr);
    }
}
