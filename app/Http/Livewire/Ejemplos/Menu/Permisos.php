<?php

namespace App\Http\Livewire\Ejemplos\Menu;

use Livewire\Component;

class Permisos extends Component
{
    public function layout()
    {
        return 'layouts.app'; // Reemplaza 'layouts.app' con el nombre de tu vista
    }
    public function render()
    {
        return view('livewire.ejemplos.menu.permisos');
    }
}
