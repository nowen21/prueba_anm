<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Aprobacis;

use App\Models\User;
use Spatie\Permission\Models\Role;

trait AprobaciTrait
{
    public $accionxx;
    public $compleme = 'usuamodus.aprobacis';
    function mountAprobaci(): void
    {
        $this->accionxx = 'Aprobación';
        $this->moduloxx = 'aprobaci';
        $this->permisox = 'aprobaci';
        $this->volverxx = $this->permisox . '-listaxxx';
        $this->titumodu = 'Módulo Usurios';
        $this->pestania = ['moduloxx' => 'modusuar', 'pestania' => $this->permisox];
    }
    public function buscarAprobaci($modeloid)
    {
        $this->modeloid = $modeloid; // Asigna el ID del modelo a la propiedad $modeloid
        $this->modesele = User::findOrFail($modeloid); // Busca el modelo Usuario por su ID y lo asigna a la propiedad $modesele
        $this->name = $this->modesele->name; // Asigna el valor de la propiedad "name" del modelo a la propiedad $name
        $this->email = $this->modesele->email;
        $this->document = $this->modesele->document;
        $this->tipodocu_id = $this->modesele->tipodocu_id;
        $this->departam_id = $this->modesele->departam_id;
        $this->municipi_id = $this->modesele->municipi_id;
    }
}
