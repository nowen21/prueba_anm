<?php

namespace App\View\Components\Template\datatable;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NumeregiComponent extends Component
{
    public $paginator;
    /**
     * Create a new component instance.
     */
    public function __construct($paginator)
    {
        $this->paginator=$paginator;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.datatable.numeregi-component');
    }
}
