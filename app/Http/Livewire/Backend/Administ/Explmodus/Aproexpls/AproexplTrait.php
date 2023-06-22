<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Aproexpls;

use App\Models\backend\administ\Explotac;
use App\Models\backend\administ\Tipomine;

trait AproexplTrait
{
    public $funcionx;
    public $formbase;
    public $cantidad;
    public $tipomine_id='';
    public $estado_id;
    public $user_id;
    public $tipomine;
    public $accionxx;
    public $compleme = 'explmodus.aproexpls';
    function mountAproexpl(): void
    {
        $this->volverxx = $this->permisox . '-listaxxx';
        $this->accionxx = 'Explotación';
        $this->moduloxx = 'aproexpl';
        $this->permisox = 'aproexpl';
        $this->titumodu = 'Módulo Explotaciones';
        $this->pestania = ['moduloxx' => 'explmodu', 'pestania' => $this->permisox];
    }
    public function buscarAproexpl($modeloid,$vistaxxx=false)
    {
        $this->modeloid = $modeloid; // Asigna el ID del modelo a la propiedad $modeloid
        $this->modesele = Explotac::findOrFail($modeloid); // Busca el modelo Usuario por su ID y lo asigna a la propiedad $modesele
        $this->cantidad = $this->modesele->cantidad; // Asigna el valor de la propiedad "name" del modelo a la propiedad $name
        $this->tipomine_id = $this->modesele->tipomine_id;
        if($vistaxxx){
            $this->tipomine_id = $this->modesele->tipomine->mineral;
        }
        $this->estado_id = $this->modesele->estado_id;
        $this->user_id = $this->modesele->user_id;
    }

    public function cargarMinerals()
    {
        $consulta =  Tipomine::get(['mineral as optionxx', 'id as valuexxx']);
        $this->tipomine = $this->getCombo($consulta);
    }

    /**
     * Restablece los valores del formulario a su estado inicial.
     * Esta función se encarga de limpiar las propiedades del formulario y asignarles valores predeterminados.
     */
    public function limparFormulario()
    {
        $this->cantidad = null; // Restablece la propiedad $name a una cadena vacía
        $this->tipomine_id = '';
        $this->estado_id = null;
        $this->user_id = null;
        $this->modeloid = null; // Restablece la propiedad $modeloid a null

        $this->modesele = null; // Restablece la propiedad $modesele a null
        $this->moduloxx = 'usuario';
    }

   
}
