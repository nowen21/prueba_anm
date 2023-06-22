<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Aprocomes\Edit;

use App\Http\Livewire\Backend\Administ\Comemodus\Aprocomes\AprocomeTrait;
use App\Models\backend\administ\Explotac;
use App\Traits\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AprocomeEditLivewire extends Component
{
    use CrudTrait, AprocomeTrait;

    public function editAprocome()
    {
        $message = '';
        if ($this->modesele->tipoapro_id == 9) {
            $this->modesele->update(
                [
                    'estado_id' => 7,
                ]
            );
            $message =  'Venta aprobada con éxito.';
        } else {

            $message= DB::transaction(function () {
                $consulta = Explotac::where('user_id', Auth::id())
                    ->where('tipomine_id', $this->modesele->tipomine_id)
                    ->first();

               
                $diferenc = $consulta->descuento - $this->modesele->cantidad;
                $consulta->update(['descuento' => $diferenc]);
                $this->modesele->delete();
              
                return 'Devolución realizada con éxito.';
            }, 5);
        }

        session()->flash('message', $message);
        // Reiniciar los campos del formulario después de guardar
    }

    function mount($id): void
    {

        $this->mountAprocome();
        $this->funcionx = "edit" . ucfirst($this->moduloxx);
        $this->tituacci = 'Editar ' . $this->accionxx;
        $this->buscarAprocome($id, true);
        $this->formbase = 'livewire.backend.administ.' . $this->compleme . '.elimiver-livewire';
        $this->rutavist = 'livewire.backend.administ.' . $this->compleme . '.edit.formular-livewire';
        $this->cargarMinerals();
    }
    public function render()
    {

        return view('livewire.backend.administ.' . $this->compleme . '.edit.aprocome-edit-livewire')
            ->extends('layouts.app');
    }
}
