<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Roleperms\List;

use App\Http\Livewire\Backend\Administ\Menuperms\Roleperms\RolepermTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolepermListLivewire extends Component
{
    use CrudTrait,RolepermTrait;
    protected $listeners = ['deleteConfirmaUsuaroleJs' => 'deleteConfirmaUsuaroleJs'];
    /**
     * Obtiene los datos de los Usuaroles y los prepara para su visualización en la interfaz de Usuarole.
     */


    public function data()
    {
        $usuario = Role::findOrFail($this->modeloid);
        $this->data =  $usuario->permissions()->select('id', 'name')
        ->where('name', 'like', '%' . $this->search . '%')
        ->orderBy($this->sortField, $this->sortDirection)
        ->paginate(5);
    }

   

    // Método para desasignar un rol de un usuario
    public function desasignarPermiso($rolId)
    {
        // Buscar el usuario por su ID
        $usuario = Role::findOrFail($this->modeloid);

        // Buscar el rol por su ID
        $rol = Permission::findOrFail($rolId);

        // Desasignar el rol del usuario utilizando el método "detach()" de la relación Many-to-Many "roles()"
        $usuario->permissions()->detach($rol);
        session()->flash('message', ucfirst($this->moduloxx).' eliminado con éxito.'); // Muestra un mensaje de éxito

    }

    public function cambiarVista($cambvist, $modeloid)
    {
        if ($modeloid > 0) {
            $this->modeloid = $modeloid;
        }

        $this->cambvist = $cambvist;
    }
    function mount($id): void
    {
        $this->modeloid = $id;
        $this->mountRoleperm();
        $this->tituacci = 'Lista de '.$this->accionxx;
      
        $this->data();
        $this->rutavist = 'livewire.backend.administ.'.$this->compleme.'.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.'.$this->compleme.'.list.roleperm-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
