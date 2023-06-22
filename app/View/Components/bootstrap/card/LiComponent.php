<?php

namespace App\View\Components\bootstrap\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LiComponent extends Component
{
    public $liparame;
    /**
     * Create a new component instance.
     */
    public function __construct($liparame)
    {
        $this->liparame=$liparame;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bootstrap.card.li-component');
    }
}
