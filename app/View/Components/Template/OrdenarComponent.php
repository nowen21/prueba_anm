<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OrdenarComponent extends Component
{
    public $clasexxx="fa-sort";
    /**
     * Create a new component instance.
     */
    public function __construct($campcamb, $direccio, $campoxxx)
    {
        $this->sortBy($campcamb, $direccio, $campoxxx);
    }

    public function sortBy($campcamb, $direccio, $campoxxx)
    {
        if ($campcamb === $campoxxx) {
            $this->clasexxx = $direccio === 'asc' ? 'fa-sort-down active' : 'fa-sort-up   active';
        } 
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.ordenar-component');
    }
}
