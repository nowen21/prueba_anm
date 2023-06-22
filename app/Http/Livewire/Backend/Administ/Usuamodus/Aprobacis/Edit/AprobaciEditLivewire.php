<?php

namespace App\Http\Livewire\Backend\Administ\Usuamodus\Aprobacis\Edit;

use App\Http\Livewire\Backend\Administ\Usuamodus\Aprobacis\AprobaciTrait;
use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class AprobaciEditLivewire extends Component
{
    use CrudTrait,AprobaciTrait;
    public function editAprobaci()
    {
        $this->modesele = User::find($this->modeloid); // Busca el {{ $this->formtitu }} por su ID
        if ($this->modesele) {
            $this->modesele->update([
                'estado_id' => 1,
                'user_edita_id' => Auth::id()
            ]);
            $this->modesele ->assignRole(Role::find(5)->name);// 2
            session()->flash('message', 'Autorización realizada con éxito'); // Muestra un mensaje de éxito
            return redirect()->route($this->permisox.'-listaxxx');
        }
        // Reiniciar los campos del formulario después de guardar
    }

    function mount($id): void
    {
        $this->mountAprobaci();
        $this->tituacci = 'Realizar '.$this->accionxx;
        $this->buscarAprobaci($id);
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.edit.formular-livewire';
    }

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.edit.user-edit-livewire')
            ->extends('layouts.app');
    }
}
