<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Roles\Create;

use App\Http\Livewire\Backend\Administ\Menuperms\Roles\RoleTrait;
use App\Traits\CrudTrait;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleCreateLivewire extends Component
{
    public $guard_name;
    use CrudTrait,RoleTrait;
    protected function rules()
    {
        return [
            'name' => ['required','unique:roles'],
            'guard_name' => ['required', ],
            
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'El nombre del ' . $this->moduloxx . ' es requerido',
            'name.unique' => 'El ' . $this->moduloxx . ' ya existe',
            'guard_name.required' => 'El guard es requerido',
            
        ];
    }


    public function createRol()
    {
        $this->validate();
        $this->modesele = new Role();
        $this->modesele->name = $this->name;
        $this->modesele->guard_name = $this->guard_name;
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
        $this->guard_name = null;
        $this->modeloid = 0; // Restablece la propiedad $modeloid a null
        $this->modesele = null; // Restablece la propiedad $modesele a null
    }

    function mount(): void
    {
        $this->mountRol();
        $this->tituacci='Crear '.$this->accionxx;
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.create.formular-livewire';
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.create.role-create-livewire');
    }
}
