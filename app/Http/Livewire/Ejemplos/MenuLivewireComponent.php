<?php

namespace App\Http\Livewire\Ejemplos;

use Livewire\Component;

class MenuLivewireComponent extends Component
{
    public $opcionSeleccionada = 'opcion1';

    public function cambiarOpcion($opcion)
    {
        $this->opcionSeleccionada = $opcion;
        $this->emit('opcionCambiada', $opcion);
    }

    public function render()
    {
        return view('livewire.ejemplos.menu-livewire-component');
    }
}
