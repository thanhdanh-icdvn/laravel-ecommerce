<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories(): \Illuminate\Database\Eloquent\Relations\hasMany
    {
        return $this->hasMany(Category::class);
    }

    public function skus(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SKU::class);
    }

    public function variants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Variant::class);
    }

    public function generateVariant(array $input): array
    {
        if (! count($input)) {
            return [];
        }

        $result = [[]];

        foreach ($input as $key => $values) {
            $append = [];
            foreach ($values as $value) {
                foreach ($result as $data) {
                    $append[] = $data + [$key => $value];
                }
            }
            $result = $append;
        }

        return $result;
    }

    public function saveVariant(array $variants)
    {
        $skus = $this->skus()->createMany(array_fill(0, count($variants), []));

        $variantOptions = [];

        foreach ($skus as $index => $sku) {
            foreach ($variants[$index] as $optionValue) {
                $variantOptions[] = [
                    'product_id'      => $this->id,
                    'sku_id'          => $sku->id,
                    'option_id'       => $optionValue['option_id'],
                    'option_value_id' => $optionValue['id'],
                    'created_at'      => now(),
                    'updated_at'      => now(),
                ];
            }
        }

        $this->variants()->insert($variantOptions);
    }
}
