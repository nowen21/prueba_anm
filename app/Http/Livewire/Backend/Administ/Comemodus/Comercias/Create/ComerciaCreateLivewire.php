<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Comercias\Create;

use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\ComerciaTrait;
use App\Models\backend\administ\Comercia;
use App\Models\backend\administ\Explotac;
use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ComerciaCreateLivewire extends Component
{
    use CrudTrait,ComerciaTrait;
    protected function rules()
    {
        return [
            'cantidad' => ['required','gt:0','numeric','max:' . $this->disponib,],
            'tipomine_id' => ['required',],
        ];
    }

    protected function messages()
    {
        return [
            'cantidad.required' => 'La cantidad es requerida',
            'cantidad.gt' => 'El valor de la cantidad debe ser mayor a cero',
            'cantidad.numeric' => 'El valor de la cantidad debe ser numérico',
            'cantidad.max' => 'El valor de la cantidad debe ser menor o igual a '.$this->disponib,
            'tipomine_id.required' => 'El mineral es requerido',
        ];
    }

    public function createComercia()
    {
        $this->validate();
        $this->modesele = new Comercia();
        $this->modesele->cantidad = $this->cantidad;
        $this->modesele->tipomine_id = $this->tipomine_id;
        $this->modesele->estado_id = 6;
        $this->modesele->user_id = Auth::id();
        $this->modesele->tipoapro_id = 9;
        $this->modesele->save();

        $consulta = Explotac::where('user_id', Auth::id())
        ->where('tipomine_id', $this->tipomine_id)
        ->first();
        $diferenc=$consulta->descuento+$this->cantidad;
        
        $consulta->update(['descuento'=>$diferenc]);
        session()->flash('message', $this->accionxx.' creada con éxito.');
        // Reiniciar los campos del formulario después de guardar
        $this->limparFormulario();
    }
  
    function mount(): void
    {
        $this->mountComercia();
        $this->funcionx="create".ucfirst($this->moduloxx);
        $this->tituacci = 'Crear '.$this->accionxx;
        $this->formbase = 'livewire.backend.administ.' . $this->compleme . '.creaedit-livewire';
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.create.formular-livewire';
        $this->cargarMinerals();
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.create.comercia-create-livewire');
    }
}
