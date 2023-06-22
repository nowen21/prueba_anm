<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\List;

use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\ExplotacTrait;
use App\Models\backend\administ\Explotac;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class ExplotacListLivewire extends Component
{
    use CrudTrait, ExplotacTrait;
    protected $listeners = ['deleteConfirmaExplotacJs' => 'deleteConfirmaExplotacJs'];
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
            ->join('tipomines','explotacs.tipomine_id','=','tipomines.id')
            ->join('estados','explotacs.estado_id','=','estados.id')
            ->where('cantidad', 'like', '%' . $this->search . '%') // Filtra los Usuarios por el nombre
            ->orWhere('estado_id', 'like','%' . $this->search . '%')
            ->orWhere('tipomine_id', 'like','%' . $this->search . '%')
            ->orWhere('user_id', 'like','%' . $this->search . '%')
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
        $this->mountExplotac();
        $this->tituacci = 'Listado de ' . substr($this->accionxx,0,-3) . 'ones';

        $this->data();
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.' . $this->compleme . '.list.explotac-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
