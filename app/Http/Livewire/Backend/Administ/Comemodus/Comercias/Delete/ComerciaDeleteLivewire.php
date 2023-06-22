<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Comercias\Delete;

use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\ComerciaTrait;
use App\Models\backend\administ\Comercia;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class ComerciaDeleteLivewire extends Component
{
    use CrudTrait, ComerciaTrait;
    protected $listeners = ['deleteReConfirmaComerciaJs' => 'deleteReConfirmaComerciaJs'];
    function mount($id): void
    {
        $this->mountComercia();
        $this->tituacci = 'Eliminar ' . $this->accionxx;
        $this->buscarComercia($id, true);
        $this->formbase = 'livewire.backend.administ.' . $this->compleme . '.elimiver-livewire';
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.delete.formular-livewire';
    }

    function deleteReConfirmaComerciaJs()
    {
        $modesele = Comercia::findOrFail($this->modeloid);
        $modesele->update([
            'estado_id' => 6,
            'tipoapro_id' => 8,
        ]);
        session()->flash('message', ucfirst($this->moduloxx) . ' eliminada con éxito.');
        return redirect()->route($this->permisox . '-listaxxx');
    }

    public function render()
    {
        return view('livewire.backend.administ.' . $this->compleme . '.delete.comercia-delete-livewire')
            ->extends('layouts.app');
    }
}
