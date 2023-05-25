<?php

namespace App\View\Components\Inputs;

use App\Enums\LabelType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Floating extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $label = "No label", public string $type= "default")
    {
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.floating', ['attributes', 'label', 'type', 'slot']);
    }
}
