<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Aprocomes\List;

use App\Http\Livewire\Backend\Administ\Comemodus\Aprocomes\AprocomeTrait;
use App\Models\backend\administ\Comercia;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class AprocomeListLivewire extends Component
{
    use CrudTrait, AprocomeTrait;
    /**
     * Obtiene los datos de los Usuarios y los prepara para su visualización en la interfaz de usuario.
     */
    public function data()
    {

        $this->data = Comercia::query()
            ->select([
                'comercias.id',
                'cantidad',
                'tipomines.mineral',
                'estados.estado',
                'tipoapro.estado as tipoapro',
                'user_id',
                'estado_id'
            ]) //Aprocome
            ->join('tipomines', 'comercias.tipomine_id', '=', 'tipomines.id')
            ->join('estados', 'comercias.estado_id', '=', 'estados.id')
            ->join('estados as tipoapro', 'comercias.tipoapro_id', '=', 'tipoapro.id')
            ->where(function ($queryxxx) {
                $queryxxx->where('cantidad', 'like', '%' . $this->search . '%'); // Filtra los Usuarios por el nombre
                $queryxxx->orWhere('estado_id', 'like', '%' . $this->search . '%');
                $queryxxx->orWhere('tipomine_id', 'like', '%' . $this->search . '%');
                $queryxxx->orWhere('user_id', 'like', '%' . $this->search . '%');
            })
            ->where('comercias.estado_id',6)

            ->orderBy($this->sortField, $this->sortDirection) // Ordena los Usuarios según los campos de ordenación
            ->paginate(5); // Pagina los resultados
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
        $this->mountAprocome();
        $this->tituacci = 'Listado de ' . substr($this->accionxx, 0, -3) . 'ones para aprobación';

        $this->data();
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.' . $this->compleme . '.list.aprocome-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
