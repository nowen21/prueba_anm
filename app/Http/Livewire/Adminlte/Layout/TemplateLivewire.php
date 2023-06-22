<?php

namespace App\Http\Livewire\Adminlte\Layout;

use Livewire\Component;

class TemplateLivewire extends Component
{
    private $vistasxx = [
        'rolexxxx' => 'backend.administ.temprole-livewire',
        'usuariox' => 'backend.administ.usuarios.tempusua-livewire',
    ];
    public $vistaxxx = '';

    protected $listeners = ['recibirVista'];
    public function mount()
    {
        $this->vistaxxx = $this->vistasxx['rolexxxx'];
    }
    public function recibirVista($vistaxxx)
    {
        $this->vistaxxx = $this->vistasxx[$vistaxxx];
    }
    public function render()
    {

        return view('livewire.adminlte.layout.template-livewire');
    }
}
