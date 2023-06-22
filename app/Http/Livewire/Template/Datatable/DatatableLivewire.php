<?php

namespace App\Http\Livewire\Template\Datatable;

use Livewire\Component;

class DatatableLivewire extends Component
{
    public $slotWithName;
    public function render()
    {
        return view('livewire.template.datatable.datatable-livewire');
    }
}
