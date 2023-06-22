<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\Edit;

use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\ExplotacTrait;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExplotacEditLivewire extends Component
{
    use CrudTrait, ExplotacTrait;

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

    public function editExplotac()
    {
        $this->validate();
        $this->modesele->update(
            [
                'cantidad' => $this->cantidad,
                'tipomine_id' => $this->tipomine_id,
            ]
        );
        session()->flash('message', ucfirst($this->accionxx) . ' actualizado con éxito.');
        // Reiniciar los campos del formulario después de guardar
    }

    function mount($id): void
    {
        
        $this->mountExplotac();
        $this->funcionx="edit".ucfirst($this->moduloxx);
        $this->tituacci = 'Editar ' . $this->accionxx;
        $this->buscarExplotac($id);
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.creaedit-livewire';
        $this->cargarMinerals();
        
    }
    public function render()
    {

        return view('livewire.backend.administ.' . $this->compleme . '.edit.explotac-edit-livewire')
            ->extends('layouts.app');
    }
}
