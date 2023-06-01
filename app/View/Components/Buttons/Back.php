<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Back extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $backUrl)
    {
        $this->backUrl = $backUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.back', ['attributes', 'backUrl', 'slot']);
    }
}
