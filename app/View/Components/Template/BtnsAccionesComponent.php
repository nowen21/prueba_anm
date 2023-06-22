<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BtnsAccionesComponent extends Component
{
    public $permisox;
    public $moduloxx;
    public $tipobtnx;
    /**
     * Create a new component instance.
     */
    public function __construct($permisox,$moduloxx,$tipobtnx)
    {
        $this->permisox=$permisox;
        $this->moduloxx=$moduloxx;
        $this->tipobtnx=$tipobtnx;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.btns-acciones-component');
    }
}
