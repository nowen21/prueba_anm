<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Aprobacis\List;

use App\Http\Livewire\Backend\Administ\Usuamodus\Aprobacis\AprobaciTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class AprobaciListLivewire extends Component
{
    use CrudTrait, AprobaciTrait;
    protected $listeners = ['deleteConfirmaAprobaciJs' => 'deleteConfirmaAprobaciJs'];
    /**
     * Obtiene los datos de los Usuarios y los prepara para su visualización en la interfaz de usuario.
     */
    public function data()
    {
        $this->data = User::query()
        ->select(['users.id','users.name','estados.estado'])
            ->join('estados', 'users.estado_id', '=', 'estados.id')
            ->where('name', 'like', '%' . $this->search . '%') // Filtra los Usuarios por el nombre
            ->whereIn('estado_id', [3,4])
            ->orderBy($this->sortField, $this->sortDirection) // Ordena los Usuarios según los campos de ordenación
            ->paginate(5); // Pagina los resultados
    }

    function deleteConfirmaAprobaciJs($id)
    {
        return redirect()->route($this->permisox . '-elminact', $id);
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
        $this->mountAprobaci();
        $this->tituacci = 'Lista de ' . $this->accionxx;

        $this->data();
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.' . $this->compleme . '.list.aprobaci-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
