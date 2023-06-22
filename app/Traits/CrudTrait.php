<?php

namespace App\Traits;

use App\Models\backend\administ\Departam;
use App\Models\backend\administ\Municipi;
use App\Models\backend\administ\Tipodocu;

trait CrudTrait
{
    public $volverxx;
    public $modeloid;
    public $estado_id;
    public $rutavist='';
    public $pestania=[];
    public $search = '';
    public $sortField = 'id';
    public $tituacci = '';
    public $titumodu = '';
    public $sortDirection = 'asc';
    public $cambvist = 'datatabl';
    private $data;
    public $permisox;
    public $modesele;
    public $name;
    public $email = null;
    public $document = null;
    public $tipodocu_id = '';
    public $departam_id = '';
    public $municipi_id = '';
    public $tipodocu = ['' => 'Seleccione'];
    public $departam = ['' => 'Seleccione'];
    public $municipi = ['' => 'Seleccione'];
    public $moduloxx;
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

   

    public function cargarTipodocus()
    {
        $consulta = Tipodocu::get(['nombre as optionxx', 'id as valuexxx']);
        $this->tipodocu = $this->getCombo($consulta);
    }

    public function cargarDepartams()
    {
        $consulta =  Departam::get(['departam as optionxx', 'id as valuexxx']);
        $this->departam = $this->getCombo($consulta);
    }

    public function cargarMunicipis()
    {

        $consulta = Municipi::where('departam_id', $this->departam_id)->get(['municipi as optionxx', 'id as valuexxx']);
        $this->municipi = $this->getCombo($consulta);
    }

    public function updatedDepartamId()
    {
        $this->municipi_id = '';
        $consulta = Municipi::where('departam_id', $this->departam_id)->get(['municipi as optionxx', 'id as valuexxx']);
        $this->municipi = $this->getCombo($consulta);
    }

    public function getCombo($dataxxxxx)
    {
        $comboxxxx=[''=>'Seleccione'];
        foreach ($dataxxxxx as $key => $value) {
            $comboxxxx[$value->valuexxx]=$value->optionxx;
        }
        return $comboxxxx;
    }
}
