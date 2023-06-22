<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Roleperms\Create;

use App\Http\Livewire\Backend\Administ\Menuperms\Roleperms\RolepermTrait;
use App\Models\User;
use App\Traits\CrudTrait;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolepermCreateLivewire extends Component
{
    use CrudTrait,RolepermTrait;

    /**
     * Carga los roles no asignados al usuario.
     *
     * @param int $usuarioId El ID del usuario.
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function cargarPermisosNoAsignadosRol()
    {
        // $this->data = Role::query()
        // ->where('name', 'like', '%' . $this->search . '%') // Filtra los Roles por el nombre
        // ->orderBy($this->sortField, $this->sortDirection) // Ordena los Roles según los campos de ordenación
        // ->paginate(5); // Pagina los resultados


        $usuario = Role::findOrFail($this->modeloid);
        $rolesAsignados = $usuario->permissions()->pluck('id');

        // Obtener los roles no asignados utilizando una consulta con join
        $rolesNoAsignados = Permission::whereNotIn('id', $rolesAsignados)
        ->where('name', 'like', '%' . $this->search . '%')
        ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(5);
        return $rolesNoAsignados;
    }

    // Método para asignar un rol a un usuario
    public function asignarPermsio($rolId)
    {
        // Buscar el usuario por su ID
        $usuario = Role::findOrFail($this->modeloid);

        // Buscar el rol por su ID
        $rol = Permission::findOrFail($rolId);

        // Asignar el rol al usuario utilizando la relación Many-to-Many "roles()"
        // Utiliza el método "syncWithoutDetaching()" para evitar duplicados en la tabla pivot
        $usuario->permissions()->syncWithoutDetaching($rol);
        session()->flash('message', ucfirst($this->moduloxx).' asignado con éxito.'); // Muestra un mensaje de éxito

    }

    function mount(): void
    {
        $this->mountRoleperm();
        $this->tituacci = 'Asignar '.$this->accionxx;
      
        $this->rutavist = 'livewire.backend.administ.'.$this->compleme.'.create.formular-livewire';
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.create.roleperm-create-livewire');
    }
}
