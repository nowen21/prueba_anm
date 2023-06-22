<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Usuaroles\Create;

use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UsuaroleCreateLivewire extends Component
{
    use CrudTrait;

    /**
     * Carga los roles no asignados al usuario.
     *
     * @param int $usuarioId El ID del usuario.
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function cargarRolesNoAsignadosUsuario()
    {
        $usuario = User::findOrFail($this->modeloid);
        $rolesAsignados = $usuario->roles()->pluck('id');

        // Obtener los roles no asignados utilizando una consulta con join
        $rolesNoAsignados = Role::whereNotIn('id', $rolesAsignados)
            ->paginate(10);
        return $rolesNoAsignados;
    }

    // Método para asignar un rol a un usuario
    public function asignarRol($rolId)
    {
        // Buscar el usuario por su ID
        $usuario = User::findOrFail($this->modeloid);

        // Buscar el rol por su ID
        $rol = Role::findOrFail($rolId);

        // Asignar el rol al usuario utilizando la relación Many-to-Many "roles()"
        // Utiliza el método "syncWithoutDetaching()" para evitar duplicados en la tabla pivot
        $usuario->roles()->syncWithoutDetaching($rol);
        session()->flash('message', 'Rol asignado con éxito.'); // Muestra un mensaje de éxito

    }

    function mount(): void
    {
        $this->moduloxx = 'usuario';
        $this->permisox = 'usuarole';
        $this->titumodu = 'Módulo Usuarios';
        $this->tituacci = 'Asignar Roles-Usuario';
        $this->pestania = ['moduloxx' => 'modusuar', 'pestania' => 'usuariox'];
        $this->rutavist = 'livewire.backend.administ.usuamodus.usuaroles.create.formular-livewire';
    }

    public function render()
    {
        return view('livewire.backend.administ.usuamodus.usuaroles.create.usuarole-create-livewire');
    }
}
