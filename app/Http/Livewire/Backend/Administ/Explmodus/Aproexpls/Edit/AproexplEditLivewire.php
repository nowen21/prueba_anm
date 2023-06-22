<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Aproexpls\Edit;

use App\Http\Livewire\Backend\Administ\Explmodus\Aproexpls\AproexplTrait;
use App\Traits\CrudTrait;
use Livewire\Component;

class AproexplEditLivewire extends Component
{
    use CrudTrait, AproexplTrait;

    protected function rules()
    {
        return [
            'cantidad' => ['required', 'gt:0'],
            'tipomine_id' => ['required',],
        ];
    }

    protected function messages()
    {
        return [
            'cantidad.required' => 'La cantidad es requerida',
            'cantidad.gt' => 'El valor de la cantidad debe ser mayor a cero',
            'tipomine_id.required' => 'El mineral es requerido',
        ];
    }

    public function editAproexpl()
    {
        $this->validate();
        $this->modesele->update(
            [
                'estado_id'=>7
            ]
        );
        session()->flash('message', ucfirst($this->accionxx) . ' actualizado con éxito.');
        // Reiniciar los campos del formulario después de guardar
    }

    function mount($id): void
    {
        
        $this->mountAproexpl();
        $this->funcionx="edit".ucfirst($this->moduloxx);
        $this->tituacci = 'Aprobar ' . $this->accionxx;
        $this->buscarAproexpl($id,true);
        $this->formbase = 'livewire.backend.administ.' . $this->compleme . '.elimiver-livewire';
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.edit.formular-livewire';
        $this->cargarMinerals();
        
    }
    public function render()
    {

        return view('livewire.backend.administ.' . $this->compleme . '.edit.aproexpl-edit-livewire')
            ->extends('layouts.app');
    }
}
