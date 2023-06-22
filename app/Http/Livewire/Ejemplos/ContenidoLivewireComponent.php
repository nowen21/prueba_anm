<?php

namespace App\Http\Livewire\Ejemplos;

use Livewire\Component;

class ContenidoLivewireComponent extends Component
{
    public $opcionSeleccionada;

    protected $listeners = ['opcionCambiada'];

    public function opcionCambiada($opcion)
    {
        $this->opcionSeleccionada = $opcion;
    }
    public function render()
    {
        return view('livewire.ejemplos.contenido-livewire-component');
    }
}
