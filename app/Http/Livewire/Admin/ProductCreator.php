<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductCreator extends Component
{
    public Product $product;
    public function render()
    {
        return view('livewire.admin.product-creator')->layout('layouts.app');
    }
}
