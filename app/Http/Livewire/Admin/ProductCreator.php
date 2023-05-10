<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProductCreator extends Component
{
    public function render()
    {
        return view('livewire.admin.product-creator')->layout('layouts.app');
    }
}
