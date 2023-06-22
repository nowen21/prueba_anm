<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\Delete;

use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\UserTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class UserDeleteLivewire extends Component
{
    use CrudTrait,UserTrait;
    protected $listeners = ['deleteReConfirmaUsuarioJs' => 'deleteReConfirmaUsuarioJs'];
    function mount($id): void
    {
        $this->mountUsuario();
        $this->tituacci = 'Eliminar '.$this->accionxx;
        $this->buscarUsuarioVer($id);
        $this->rutavist = 'livewire.backend.administ.'.$this->compleme.'.delete.formular-livewire';
    }

    function deleteReConfirmaUsuarioJs()
    {
        $modesele = User::findOrFail($this->modeloid);
        $modesele->delete();
        session()->flash('message', ucfirst($this->moduloxx) . ' eliminado con éxito.');
        return redirect()->route($this->permisox . '-listaxxx');
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.delete.user-delete-livewire')
            ->extends('layouts.app');
    }
}
