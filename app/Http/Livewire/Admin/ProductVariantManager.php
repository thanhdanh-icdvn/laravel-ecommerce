<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ProductVariantManager extends Component
{    public Product $product;
    public Collection $skus;

    protected $rules = [
        'skus.*.name' => 'nullable|string',
        'skus.*.barcode' => 'nullable|string',
        'skus.*.price' => 'required|numeric',
        'skus.*.stock' => 'required|numeric',
    ];

    public function save()
    {
        $this->validate();

        foreach ($this->skus as $index => $sku) {
            $this->validate([
                "skus.$index.name" => ['nullable', 'string', Rule::unique('skus', 'name')->ignoreModel($sku)],
                "skus.$index.barcode" => ['nullable', 'string', Rule::unique('skus', 'barcode')->ignoreModel($sku)]
            ], [
                "skus.$index.name.unique" => 'Duplicated.'
            ]);

            $sku->save();
        }
    }

    public function render()
    {
        return view('livewire.admin.product-variant-manager');
    }
}
