<?php

namespace App\Http\Livewire\Backend\Administ\Comemodus\Comercias\View;

use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\ComerciaTrait;
use App\Traits\CrudTrait;
use Livewire\Component;

class ComerciaViewLivewire extends Component
{
    use CrudTrait,ComerciaTrait;
    function mount($modeloid): void
    {
        $this->mountComercia();
        $this->tituacci = 'Ver '.$this->accionxx;
        $this->buscarComercia($modeloid,true);
        $this->formbase = 'livewire.backend.administ.' . $this->compleme . '.elimiver-livewire';
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.view.formular-livewire';
    }
    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.view.comercia-view-livewire');
    }
}
