<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\Delete;

use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\ExplotacTrait;
use App\Models\backend\administ\Explotac;
use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;

class ExplotacDeleteLivewire extends Component
{
    use CrudTrait,ExplotacTrait;
    protected $listeners = ['deleteReConfirmaExplotacJs' => 'deleteReConfirmaExplotacJs'];
    function mount($id): void
    {
        $this->mountExplotac();
        $this->tituacci = 'Eliminar '.$this->accionxx;
        $this->buscarExplotac($id,true);
        $this->rutavist = 'livewire.backend.administ.'.$this->compleme.'.elimiver-livewire';
    }

    function deleteReConfirmaExplotacJs()
    {
        $modesele = Explotac::findOrFail($this->modeloid);
        $modesele->delete();
        session()->flash('message', ucfirst($this->moduloxx) . ' eliminada con éxito.');
        return redirect()->route($this->permisox . '-listaxxx');
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.delete.explotac-delete-livewire')
            ->extends('layouts.app');
    }
}
