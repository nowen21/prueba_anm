<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Permisos;

use Spatie\Permission\Models\Role;

trait PermisoTrait
{
    public $accionxx;
    public $compleme = 'menuperms.permisos';
    function mountRol(): void
    {
        $this->accionxx = 'Permiso';
        $this->moduloxx = 'permiso';
        $this->permisox = 'permisox';
        $this->volverxx = $this->permisox . '-listaxxx';
        $this->titumodu = 'Módulo Roles y Permisos';
        $this->pestania = ['moduloxx' => 'modurope', 'pestania' => $this->permisox];
    }
    public function buscarRol($modeloid)
    {
        $this->modeloid = $modeloid; // Asigna el ID del modelo a la propiedad $modeloid
        $this->modesele = Role::findOrFail($modeloid); // Busca el modelo Usuario por su ID y lo asigna a la propiedad $modesele
        $this->name = $this->modesele->name; // Asigna el valor de la propiedad "name" del modelo a la propiedad $name
        $this->guard_name = $this->modesele->guard_name;
    }
}
