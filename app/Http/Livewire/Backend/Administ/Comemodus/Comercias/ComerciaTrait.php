<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Comercias;

use App\Models\backend\administ\Comercia;
use App\Models\backend\administ\Explotac;
use App\Models\backend\administ\Tipomine;
use Illuminate\Support\Facades\Auth;

trait ComerciaTrait
{
    public $disponib;
    public $totalxxx;
    public $formbase;
    public $funcionx;
    public $cantidad;
    public $tipomine_id = '';
    public $estado_id;
    public $user_id;
    public $tipomine;
    public $accionxx;
    public $compleme = 'comemodus.comercias';

 
    function mountComercia(): void
    {
        $this->volverxx = $this->permisox . '-listaxxx';
        $this->accionxx = 'Comercialización';
        $this->moduloxx = 'comercia';
        $this->permisox = 'comercia';
        $this->titumodu = 'Módulo Comercialización';
        $this->pestania = ['moduloxx' => 'comemodu', 'pestania' => $this->permisox];
    }
    public function buscarComercia($modeloid, $vistaxxx = false)
    {
        $this->modeloid = $modeloid; // Asigna el ID del modelo a la propiedad $modeloid
        $this->modesele = Comercia::findOrFail($modeloid); // Busca el modelo Usuario por su ID y lo asigna a la propiedad $modesele
        $this->cantidad = $this->modesele->cantidad; // Asigna el valor de la propiedad "name" del modelo a la propiedad $name
        $this->tipomine_id = $this->modesele->tipomine_id;
        $this->getTipomine($this->tipomine_id);
        if ($vistaxxx) {
            $this->tipomine_id = $this->modesele->tipomine->mineral;
        }
      
        $this->estado_id = $this->modesele->estado_id;
        $this->user_id = $this->modesele->user_id;
    }

    public function cargarMinerals()
    {
        $consulta =  Tipomine::join('explotacs', 'tipomines.id', '=', 'explotacs.tipomine_id')
            ->where('estado_id', 7)
            ->where('explotacs.user_id', Auth::id())
            ->get(['tipomines.mineral as optionxx', 'tipomines.id as valuexxx']);
        $this->tipomine = $this->getCombo($consulta);
    }

    function getTipomine($tipomine)
    {
        $consulta =  Explotac::where('user_id', Auth::id())
            ->where('tipomine_id', $tipomine)
            ->first(['cantidad', 'descuento']);
        $this->totalxxx = $consulta->cantidad;
        $this->disponib = $this->totalxxx - $consulta->descuento;
        return $consulta;
    }

    public function updatedTipomineId()
    {
       $this->getTipomine($this->tipomine_id);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
        $this->totalxxx = null;
        $this->disponib = null;
        $this->user_id = null;
        $this->modeloid = null; // Restablece la propiedad $modeloid a null

        $this->modesele = null; // Restablece la propiedad $modesele a null
        $this->moduloxx = 'usuario';
    }
}
