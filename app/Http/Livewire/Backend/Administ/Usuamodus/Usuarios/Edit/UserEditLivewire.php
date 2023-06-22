<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\Edit;

use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\UserTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserEditLivewire extends Component
{
    use CrudTrait,UserTrait;
  
   

    protected function rules()
    {
       
            return [
                'name' => ['required',],
                'email' => ['required', 'email', 'unique:users,email,' . $this->modesele->id],
                'document' => ['required', 'unique:users,document,' . $this->modesele->id],
                'tipodocu_id' => ['required'],
                'departam_id' => ['required'],
                'municipi_id' => ['required'],
            ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'El nombre del ' . $this->moduloxx . ' es requerido',
            'name.unique' => 'El ' . $this->moduloxx . ' ya existe',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico no es válido',
            'email.unique' => 'El correo electrónico ya está en uso',
            'document.required' => 'El documento es requerido',
            'document.unique' => 'El documento ya está en uso',
            'tipodocu_id.required' => 'El tipo de documento es requerido',
            'departam_id.required' => 'El departamento es requerido',
            'municipi_id.required' => 'El municipio es requerido',


        ];
    }



    public function editUsuario()
    {
        $this->validate();

        $this->modesele->update(
            [
                'name'=>$this->name,
                'email'=>$this->email,
                'document'=>$this->document,
                'tipodocu_id'=>$this->tipodocu_id,
                'departam_id'=>$this->departam_id,
                'municipi_id'=>$this->municipi_id,
                'user_edita_id'=>Auth::id(),
        ]);
        session()->flash('message', ucfirst($this->moduloxx) . ' actualizado con éxito.');
        // Reiniciar los campos del formulario después de guardar
    }

    function mount($id): void
    {
        $this->mountUsuario();
        $this->tituacci = 'Editar '.$this->accionxx;
        $this->buscarUsuario($id);
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.edit.formular-livewire';
        $this->cargarTipodocus();
        $this->cargarDepartams();
        $this->cargarMunicipis();
    }

   

    
    public function render()
    {

        return view('livewire.backend.administ.'.$this->compleme.'.edit.user-edit-livewire')
        ->extends('layouts.app');
    }

}
