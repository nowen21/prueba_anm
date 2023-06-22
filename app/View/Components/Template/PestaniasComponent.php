<?php

namespace App\View\Components\Template;

use App\Traits\PestaniaTrait;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class PestaniasComponent extends Component
{ 
    use  PestaniaTrait;
   public $pestanix;
    /**
     * Create a new component instance.
     */
    public function __construct($pestania)
    {
        $this->pestanix=$this->dataxxxx[$pestania['moduloxx']];
        $this->pestanix[$pestania['pestania']]['activexx']='active';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
     
        return view('components.template.pestanias-component');
    }
}
