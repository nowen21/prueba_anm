<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Roleperms;

use Spatie\Permission\Models\Role;

trait RolepermTrait
{
    public $accionxx;
    public $compleme = 'menuperms.roleperms';
    function mountRoleperm(): void
    {
        $this->accionxx = 'Permisos-Rol';
        $this->moduloxx = 'roleperm';
        $this->permisox = 'roleperm';
        $this->volverxx = $this->permisox . '-listaxxx';
        $this->titumodu = 'Módulo Roles y Permisos';
        $this->pestania = ['moduloxx' => 'modurope', 'pestania' => 'rolexxxx'];
    }
    public function buscarRol($modeloid)
    {
        $this->modeloid = $modeloid; // Asigna el ID del modelo a la propiedad $modeloid
        $this->modesele = Role::findOrFail($modeloid); // Busca el modelo Usuario por su ID y lo asigna a la propiedad $modesele
        $this->name = $this->modesele->name; // Asigna el valor de la propiedad "name" del modelo a la propiedad $name
        $this->guard_name = $this->modesele->guard_name;
    }
}
