<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\Create;

use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\UserTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserCreateLivewire extends Component
{
    use CrudTrait,UserTrait;
    protected function rules()
    {
        return [
            'name' => ['required',],
            'email' => ['required', 'email', 'unique:users'],
            'document' => ['required', 'unique:users'],
            'tipodocu_id' => ['required'],
            'departam_id' => ['required'],
            'municipi_id' => ['required'],
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'El nombre del ' . $this->moduloxx . ' es requerido',
            'name.unique' => 'El ' . $this->moduloxx . ' ya existe',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico no es válido',
            'email.unique' => 'El correo electrónico ya está en uso',
            'document.required' => 'El documento es requerido',
            'document.unique' => 'El documento ya está en uso',
            'tipodocu_id.required' => 'El tipo de documento es requerido',
            'departam_id.required' => 'El departamento es requerido',
            'municipi_id.required' => 'El municipio es requerido',
        ];
    }


    public function createUsuario()
    {
        $this->validate();
        $this->modesele = new User();
        $this->modesele->name = $this->name;
        $this->modesele->email = $this->email;
        $this->modesele->document = $this->document;
        $this->modesele->tipodocu_id = $this->tipodocu_id;
        $this->modesele->departam_id = $this->departam_id;
        $this->modesele->municipi_id = $this->municipi_id;
        $this->modesele->estado_id = 1;
        $this->modesele->user_edita_id = Auth::id();
        $this->modesele->user_crea_id = Auth::id();
        $this->modesele->password = $this->document;
        $this->modesele->save();
        session()->flash('message', ucfirst($this->moduloxx) . ' creado con éxito.');
        // Reiniciar los campos del formulario después de guardar
        $this->limparFormulario();
    }


    /**
     * Restablece los valores del formulario a su estado inicial.
     * Esta función se encarga de limpiar las propiedades del formulario y asignarles valores predeterminados.
     */
    public function limparFormulario()
    {
        $this->name = ''; // Restablece la propiedad $name a una cadena vacía
        $this->email = null;
        $this->document = null;
        $this->tipodocu_id = '';
        $this->departam_id = '';
        $this->municipi_id = '';
        $this->modeloid = 0; // Restablece la propiedad $modeloid a null
        $this->estado_id = 0;
        $this->modesele = null; // Restablece la propiedad $modesele a null
        $this->moduloxx = 'usuario';
    }

    function mount(): void
    {
        $this->mountUsuario();
        $this->tituacci = 'Crear '.$this->accionxx;
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.create.formular-livewire';
        $this->cargarTipodocus();
        $this->cargarDepartams();
        $this->cargarMunicipis();
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.create.user-create-livewire');
    }
}
