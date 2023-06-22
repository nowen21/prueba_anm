<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Usuaroles\List;

use App\Models\User;
use App\Traits\CrudTrait;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UsuaroleListLivewire extends Component
{
    use CrudTrait;
    protected $listeners = ['deleteConfirmaUsuaroleJs' => 'deleteConfirmaUsuaroleJs'];
    /**
     * Obtiene los datos de los Usuaroles y los prepara para su visualización en la interfaz de Usuarole.
     */


    public function data()
    {
        // $this->data = Role::query()
        // ->where('name', 'like', '%' . $this->search . '%') // Filtra los {{ $this->formtitu }}s por el nombre
        // ->orderBy($this->sortField, $this->sortDirection) // Ordena los {{ $this->formtitu }}s según los campos de ordenación
        // ->paginate(5); // Pagina los resultados

        $usuario = User::findOrFail($this->modeloid);
        $this->data =  $usuario->roles()->select('id', 'name')->paginate(5);
    }

    function deleteConfirmaUsuaroleJs($id)
    {
        return redirect()->route($this->permisox . '-elminact', $id);
    }

    // Método para desasignar un rol de un usuario
    public function desasignarRol($rolId)
    {
        // Buscar el usuario por su ID
        $usuario = User::findOrFail($this->modeloid);

        // Buscar el rol por su ID
        $rol = Role::findOrFail($rolId);

        // Desasignar el rol del usuario utilizando el método "detach()" de la relación Many-to-Many "roles()"
        $usuario->roles()->detach($rol);
        session()->flash('message', 'Rol eliminado con éxito.'); // Muestra un mensaje de éxito

    }

    public function cambiarVista($cambvist, $modeloid)
    {
        if ($modeloid > 0) {
            $this->modeloid = $modeloid;
        }

        $this->cambvist = $cambvist;
    }
    function mount($id): void
    {
        $this->modeloid = $id;
        $this->moduloxx = 'usuarole';
        $this->permisox = 'usuarole';
        $this->titumodu = 'Módulo Usuarios';
        $this->tituacci = 'Lista de Roles-Usuario';
        $this->pestania = ['moduloxx' => 'modusuar', 'pestania' => 'usuariox'];
        $this->data();
        $this->rutavist = 'livewire.backend.administ.usuamodus.usuaroles.list.formular-livewire';
    }

    public function render()
    {
        $this->data();
        return view('livewire.backend.administ.usuamodus.usuaroles.list.usuarole-list-livewire', ['data' => $this->data])
            ->extends('layouts.app');
    }
}
