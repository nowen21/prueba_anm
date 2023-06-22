<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Permisos\List;

use App\Http\Livewire\Backend\Administ\Menuperms\Permisos\PermisoTrait;
use App\Traits\CrudTrait;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermisoListLivewire extends Component
{
    use CrudTrait,PermisoTrait;
    protected $listeners = ['deleteConfirmaPermisoJs' => 'deleteConfirmaRolJs'];
    /**
     * Obtiene los datos de los Roles y los prepara para su visualización en la interfaz de Role.
     */
    public function data()
    {
        $this->data = Permission::query()
            ->where('name', 'like', '%' . $this->search . '%') // Filtra los Roles por el nombre
            ->orderBy($this->sortField, $this->sortDirection) // Ordena los Roles según los campos de ordenación
            ->paginate(5); // Pagina los resultados
    }

    function deleteConfirmaPermisoJs($id)
    {
        return redirect()->route($this->permisox.'-elminact',$id);
    }


    public function cambiarVista($cambvist, $modeloid)
    {
        if ($modeloid > 0) {
            $this->modeloid = $modeloid;
        }

        $this->cambvist = $cambvist;
    }
    function mount(): void
    {
        $this->mountRol();
        $this->tituacci = 'Lista de '.$this->accionxx.'s';
        $this->data();
        $this->rutavist = 'livewire.backend.administ.'.$this->compleme.'.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.'.$this->compleme.'.list.permiso-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
