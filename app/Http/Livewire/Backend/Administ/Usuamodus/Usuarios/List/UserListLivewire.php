<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\List;

use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\UserTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class UserListLivewire extends Component
{
    use CrudTrait,UserTrait;
    protected $listeners = ['deleteConfirmaUsuarioJs' => 'deleteConfirmaUsuarioJs'];
    /**
     * Obtiene los datos de los Usuarios y los prepara para su visualización en la interfaz de usuario.
     */
    public function data()
    {
        $this->data = User::query()
            ->where('name', 'like', '%' . $this->search . '%') // Filtra los Usuarios por el nombre
            ->where('estado_id', '<>', 3)
            ->orderBy($this->sortField, $this->sortDirection) // Ordena los Usuarios según los campos de ordenación
            ->paginate(5); // Pagina los resultados
    }

    function deleteConfirmaUsuarioJs($id)
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
        $this->mountUsuario();
        $this->tituacci = 'Lista de '.$this->accionxx.'s';
       
        $this->data();
        $this->rutavist = 'livewire.backend.administ.'.$this->compleme.'.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.'.$this->compleme.'.list.user-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
