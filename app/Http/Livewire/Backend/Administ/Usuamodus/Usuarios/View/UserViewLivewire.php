<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\View;

use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\UserTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class UserViewLivewire extends Component
{
    use CrudTrait,UserTrait;
    function mount($modeloid): void
    {
        $this->mountUsuario();
        $this->tituacci = 'Ver '.$this->accionxx;
        $this->buscarUsuarioVer($modeloid);
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.view.formular-livewire';
    }

   

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.view.user-view-livewire');
    }
}
