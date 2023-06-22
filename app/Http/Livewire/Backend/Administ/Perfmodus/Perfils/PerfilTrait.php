<?php

namespace App\Http\Livewire\Backend\Administ\Perfmodus\Perfils;

use App\Models\User;


trait PerfilTrait
{
    public $accionxx;
    public $compleme = 'perfmodus.perfils';
    function mountUsuario(): void
    { 
        $this->volverxx = $this->permisox . '-listaxxx';
        $this->accionxx = 'Perfil';
        $this->moduloxx = 'perfil';
        $this->permisox = 'perfilxx';
        $this->titumodu = 'Módulo Perfil';
        $this->pestania = ['moduloxx' => 'perfmodu', 'pestania' => $this->permisox];
    }
    public function buscarUsuario($modeloid)
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
