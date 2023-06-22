<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Comercias\Edit;

use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\ComerciaTrait;
use App\Models\backend\administ\Explotac;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ComerciaEditLivewire extends Component
{
    use CrudTrait, ComerciaTrait;

    protected function rules()
    {
        return [
            'cantidad' => ['required', 'gt:0', 'numeric', 'max:' . $this->disponib,],
            'tipomine_id' => ['required',],
        ];
    }

    protected function messages()
    {
        return [
            'cantidad.required' => 'La cantidad es requerida',
            'cantidad.gt' => 'El valor de la cantidad debe ser mayor a cero',
            'cantidad.numeric' => 'El valor de la cantidad debe ser numérico',
            'cantidad.max' => 'El valor de la cantidad debe ser menor o igual a ' . $this->disponib,
            'tipomine_id.required' => 'El mineral es requerido',
        ];
    }
    public function editComercia()
    {
        $this->validate();
        $consulta = Explotac::where('user_id', Auth::id())
            ->where('tipomine_id', $this->modesele->tipomine_id)
            ->first();
        $consulta->descuento = $consulta->descuento - $this->modesele->cantidad;
        $diferenc = $consulta->descuento + $this->cantidad;
        $this->modesele->update(
            [
                'cantidad' => $this->cantidad,  
            ]
        );
        $consulta->update(['descuento' => $diferenc]);
        $this->getTipomine($this->modesele->tipomine_id);
        session()->flash('message', ucfirst($this->accionxx) . ' actualizado con éxito.');
        // Reiniciar los campos del formulario después de guardar
    }

    function mount($id): void
    {

        $this->mountComercia();
        $this->funcionx = "edit" . ucfirst($this->moduloxx);
        $this->tituacci = 'Editar ' . $this->accionxx;
        $this->buscarComercia($id, true);
        $this->formbase = 'livewire.backend.administ.' . $this->compleme . '.edit-livewire';
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.edit.formular-livewire';
        $this->cargarMinerals();
    }
    public function render()
    {

        return view('livewire.backend.administ.' . $this->compleme . '.edit.comercia-edit-livewire')
            ->extends('layouts.app');
    }
}
