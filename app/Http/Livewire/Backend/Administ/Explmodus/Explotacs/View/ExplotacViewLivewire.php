<?php

namespace App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\View;

use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\ExplotacTrait;
use App\Traits\CrudTrait;
use Livewire\Component;

class ExplotacViewLivewire extends Component
{
    use CrudTrait,ExplotacTrait;
    function mount($modeloid): void
    {
        $this->mountExplotac();
        $this->tituacci = 'Ver '.$this->accionxx;
        $this->buscarExplotac($modeloid,true);
        $this->rutavist='livewire.backend.administ.'.$this->compleme.'.elimiver-livewire';
    }

   

    public function render()
    {
        return view('livewire.backend.administ.'.$this->compleme.'.view.explotac-view-livewire');
    }
}
