<?php

namespace App\View\Components\datatable;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotonesCrudComponent extends Component
{
    public $parametr;
    /**
     * Create a new component instance.
     */
    public function __construct($parametr)
    {
        $this->parametr=$parametr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.datatable.botones-crud-component');
    }
}
