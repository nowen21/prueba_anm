<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Roles\View;

use App\Http\Livewire\Backend\Administ\Menuperms\Roles\RoleTrait;
use App\Traits\CrudTrait;
use Livewire\Component;

class RoleViewLivewire extends Component
{
    public $guard_name;
    use CrudTrait,RoleTrait;
    function mount($modeloid): void
    {
        $this->mountRol();
        $this->tituacci='Ver '.$this->accionxx;
        $this->buscarRol($modeloid);
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.view.formular-livewire';
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.view.role-view-livewire');
    }
}
