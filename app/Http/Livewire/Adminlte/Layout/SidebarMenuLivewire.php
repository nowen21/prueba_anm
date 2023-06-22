<?php

namespace App\Http\Livewire\Adminlte\Layout;

use Livewire\Component;

class SidebarMenuLivewire extends Component
{
   


    public $componenteActual = 'componente1';

    protected $listeners = ['cargarComponente'];

    public function cargarComponente($componente)
    {
        $this->componenteActual = $componente;
    }

   
    
    public function render()
    {
        return view('livewire.adminlte.layout.sidebar-menu-livewire');
    }
}
