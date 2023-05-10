<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.admin.product-list',[
                'products' => Product::query()->latest()->paginate(),
        ])->layout('layouts.app');
    }
}
