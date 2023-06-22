<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Aproexpls\List;

use App\Http\Livewire\Backend\Administ\Explmodus\Aproexpls\AproexplTrait;
use App\Models\backend\administ\Explotac;
use App\Traits\CrudTrait;
use Livewire\Component;

class AproexplListLivewire extends Component
{
    use CrudTrait, AproexplTrait;
    protected $listeners = ['deleteConfirmaAproexplJs' => 'deleteConfirmaAproexplJs'];
    /**
     * Obtiene los datos de los Usuarios y los prepara para su visualización en la interfaz de usuario.
     */
    public function data()
    {

        $this->data = Explotac::query()
            ->select([
                'explotacs.id',
                'cantidad',
                'tipomines.mineral',
                'estados.estado',
                'user_id'
            ])
            ->join('tipomines', 'explotacs.tipomine_id', '=', 'tipomines.id')
            ->join('estados', 'explotacs.estado_id', '=', 'estados.id')
            // Filtra los Usuarios por el nombre
            ->where('estado_id',  6)
            ->where(function ($queryxxx) {
                $queryxxx->where('cantidad', 'like', '%' . $this->search . '%');
                $queryxxx->orWhere('estado_id', 'like', '%' . $this->search . '%');
                $queryxxx->orWhere('tipomine_id', 'like', '%' . $this->search . '%');
                $queryxxx->orWhere('user_id', 'like', '%' . $this->search . '%');
            })


            ->orderBy($this->sortField, $this->sortDirection) // Ordena los Usuarios según los campos de ordenación
            ->paginate(5); // Pagina los resultados
    }

    function deleteConfirmaExplotacJs($id)
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
        $this->mountAproexpl();
        $this->tituacci = 'Listado de ' . substr($this->accionxx, 0, -3) . 'ones';

        $this->data();
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.' . $this->compleme . '.list.aproexpl-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
