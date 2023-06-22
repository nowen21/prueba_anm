<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Roles\Delete;

use App\Http\Livewire\Backend\Administ\Menuperms\Roles\RoleTrait;
use App\Traits\CrudTrait;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleDeleteLivewire extends Component
{
    use CrudTrait,RoleTrait;
    protected $listeners = ['deleteReConfirmaRolJs' => 'deleteReConfirmaRolJs'];
    function mount($id): void
    {
        $this->mountRol();
        $this->tituacci = 'Eliminar '.$this->accionxx;
        $this->buscarRol($id);
        $this->rutavist = 'livewire.backend.administ.'.$this->compleme.'.delete.formular-livewire';
    }


    function deleteReConfirmaRolJs()
    {
        $modesele = Role::findOrFail($this->modeloid);
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
