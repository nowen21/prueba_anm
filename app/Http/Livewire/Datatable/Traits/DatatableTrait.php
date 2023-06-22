<?php

namespace App\Http\Livewire\Datatable\Traits;

trait DatatableTrait
{
    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';

    public $rolselid = null;
    public $parametr = ['filasele' => null];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function selectRow($rowId)
    {
        if ($this->rolselid == $rowId) {
            $this->rolselid = null;
        } else {
            $this->rolselid = $rowId;
        }
        $this->parametr['filasele'] = $this->rolselid;
    }

    public function isRowSelected($rowId)
    {
        $respuest = $this->rolselid == $rowId;
        return $respuest;
    }
}
