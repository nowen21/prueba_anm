<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Comercias\List;

use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\ComerciaTrait;
use App\Models\backend\administ\Comercia;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class ComerciaListLivewire extends Component
{
    use CrudTrait, ComerciaTrait;
    protected $listeners = ['deleteConfirmaComerciaJs' => 'deleteConfirmaComerciaJs'];
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
                'user_id',
                'estado_id'
            ])
            ->join('tipomines','comercias.tipomine_id','=','tipomines.id')
            ->join('estados','comercias.estado_id','=','estados.id')
            ->where('cantidad', 'like', '%' . $this->search . '%') // Filtra los Usuarios por el nombre
            ->orWhere('estado_id', 'like','%' . $this->search . '%')
            ->orWhere('tipomine_id', 'like','%' . $this->search . '%')
            ->orWhere('user_id', 'like','%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection) // Ordena los Usuarios según los campos de ordenación
            ->paginate(5); // Pagina los resultados
    }

    function deleteConfirmaComerciaJs($id)
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
        $this->mountComercia();
        $this->tituacci = 'Listado de ' . substr($this->accionxx,0,-3) . 'ones';

        $this->data();
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.' . $this->compleme . '.list.comercia-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
