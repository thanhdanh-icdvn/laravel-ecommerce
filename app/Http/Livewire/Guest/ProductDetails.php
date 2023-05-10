<?php

namespace App\Http\Livewire\Guest;

use App\Models\Product;
use Livewire\Component;

class ProductDetails extends Component
{
    public Product $product;
    public string $variant = '';
    public array $selectedOptionValues;
    public array $addToCartData = [
        'skuId' => null,
        'quantity' => 1,
    ];

    protected $queryString = ['variant' => ['except' => '']];


    public function mount()
    {
        if ($this->product->skus->count() > 1) { // product has one or more skus
            if ($this->variant != '') {
                $sku = $this->product->skus->where('id', $this->variant)->first();
                abort_if(! $sku, 400); // invalid variant query string
            } else {
                $sku = $this->product->skus->first();
            }
            $this->variant = $sku->id;
        } else { // product with single sku
            $sku = $this->product->skus->first();
        }
        $this->addToCartData['skuId'] = $sku->id;
        $this->selectedOptionValues = $sku->variants->pluck('option_value_id')->toArray();
    }

    public function updatedSelectedOptionValues()
    {
        if (count($this->selectedOptionValues) == $this->product->options->count()) {
            foreach ($this->product->skus as $sku) {
                if (collect($sku['variants'])->whereIn('option_value_id', $this->selectedOptionValues)->count() > 1) {
                    $this->variant = $sku->id;
                    $this->addToCartData['skuId'] = $sku->id;
                    $this->maxQuantity = $sku->stock;
                }
            }
        }
    }

    public function addToCart()
    {
        logger($this->addToCartData);
    }
    public function render()
    {
        return view('livewire.guest.product-details')->layout('layouts.guest');
    }
}
