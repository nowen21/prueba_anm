<?php
namespace App\Http\Livewire\Backend\Administ\Permisos;

use Spatie\Permission\Models\Permission;

/**
 * trai para crear los roles
 */
trait PermisoCreaTrait
{
    public $name;
    public $guard_name;

    protected function rules()
    {
        if (is_null($this->modeloid)) {
            return [
                'name' => ['required', 'unique:permissions'],
                'guard_name' => ['required', 'min:3'],
            ];
        }else {
            return [
                'name' => ['required', 'unique:permissions,name,'.$this->modeloid],
                'guard_name' => ['required', 'min:3'],
            ];
        }
        
    }

    protected function messages()
    {
        return [
            'name.required' => 'El nombre del '.$this->moduloxx.' es requerido',
            'guard_name.min' => 'El guard debe tener al menos 3 caracteres',
            'guard_name.required' => 'El guard es requerido',
            'name.unique' => 'El '.$this->moduloxx.' ya existe',
        ];
    }

  

    public function createPermiso()
    {
        $this->validate();
        $user = new Permission();
        $user->name = $this->name;
        $user->guard_name = $this->guard_name;
        $user->save();

        session()->flash('message', $this->formtitu.' creado con éxito.');

        // Reiniciar los campos del formulario después de guardar

        $this->name = '';
        $this->guard_name = '';
    }
}
