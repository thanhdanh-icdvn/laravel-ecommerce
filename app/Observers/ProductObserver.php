<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function updating(Product $product): void
    {
        $product->slug = \Str::slug($product->name, '-');
    }
    public function deleting(Product $product): void
    {
        $product->slug = \Str::slug($product->name, '-');
    }
}
