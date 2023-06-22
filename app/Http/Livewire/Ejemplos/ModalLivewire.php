<?php

namespace App\Http\Livewire\Ejemplos;

use Livewire\Component;

class ModalLivewire extends Component
{
    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    public function render()
    {
        return view('livewire.ejemplos.modal-livewire');
    }
}
