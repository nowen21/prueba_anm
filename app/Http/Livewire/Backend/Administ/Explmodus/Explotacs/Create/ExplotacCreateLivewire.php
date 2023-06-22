<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\Create;

use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\ExplotacTrait;
use App\Models\backend\administ\Explotac;
use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExplotacCreateLivewire extends Component
{
    use CrudTrait,ExplotacTrait;
    protected function rules()
    {
        return [
            'cantidad' => ['required','gt:0'],
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

    public function createExplotac()
    {
        $this->validate();
        $this->modesele = new Explotac();
        $this->modesele->cantidad = $this->cantidad;
        $this->modesele->tipomine_id = $this->tipomine_id;
        $this->modesele->estado_id = 6;
        $this->modesele->user_id = Auth::id();
        $this->modesele->save();
        session()->flash('message', $this->accionxx.' creada con éxito.');
        // Reiniciar los campos del formulario después de guardar
        $this->limparFormulario();
    }
  
    function mount(): void
    {
        $this->mountExplotac();
        $this->funcionx="create".ucfirst($this->moduloxx);
        $this->tituacci = 'Crear '.$this->accionxx;
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.creaedit-livewire';
        $this->cargarMinerals();
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.create.explotac-create-livewire');
    }
}
