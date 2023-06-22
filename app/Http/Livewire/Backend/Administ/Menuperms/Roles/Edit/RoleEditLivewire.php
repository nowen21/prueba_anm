<?php

namespace App\Http\Livewire\Backend\Administ\Menuperms\Roles\Edit;

use App\Http\Livewire\Backend\Administ\Menuperms\Roles\RoleTrait;
use App\Traits\CrudTrait;
use Livewire\Component;


class RoleEditLivewire extends Component
{
    public $guard_name;
    use CrudTrait,RoleTrait;
    protected function rules()
    {

        return [
            'name' => ['required', 'unique:roles,name,' . $this->modesele->id],
            'guard_name' => ['required',],
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'El nombre del ' . $this->moduloxx . ' es requerido',
            'name.unique' => 'El ' . $this->moduloxx . ' ya existe',
            'guard_name.required' => 'El correo electrónico es requerido',
        ];
    }



    public function editRol()
    {
        $this->validate();

        $this->modesele->update(
            [
                'name' => $this->name,
                'guard_name' => $this->guard_name,
            ]
        );
        session()->flash('message', ucfirst($this->moduloxx) . ' actualizado con éxito.');
        // Reiniciar los campos del formulario después de guardar
    }

    function mount($id): void
    {
        $this->mountRol();
        $this->tituacci = 'Editar '.$this->accionxx;
        $this->buscarRol($id);
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.edit.formular-livewire';
    }



    public function render()
    {

        return view('livewire.backend.administ.'.$this->compleme.'.edit.user-edit-livewire')
            ->extends('layouts.app');
    }
}
