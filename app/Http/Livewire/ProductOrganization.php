<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductOrganization extends Component
{
    public Product $product;
    public $selectedCategories = [];

    public function mount()
    {
        $this->selectedCategories = $this->product->categories->pluck('id')->toArray();
    }

    public function save()
    {
        $this->product->categories()->sync($this->selectedCategories);
        $this->emitSelf('saved');
    }

    public function render()
    {
        return view('livewire.admin.product-organization-form', ['categories' => Category::all()]);
    }
}
