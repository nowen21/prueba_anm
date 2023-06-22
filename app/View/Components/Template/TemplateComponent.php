<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TemplateComponent extends Component
{
    public $pestania;
    /**
     * Create a new component instance.
     */
    public function __construct($pestania)
    {
        $this->pestania=$pestania;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.template-component');
    }
}
