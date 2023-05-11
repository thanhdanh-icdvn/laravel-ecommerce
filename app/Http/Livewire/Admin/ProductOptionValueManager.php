<?php

namespace App\Http\Livewire\Admin;

use App\Models\Option;
use App\Models\OptionValue;
use App\Models\Product;
use Livewire\Component;

class ProductOptionValueManager extends Component
{
    public Product $product;
    public Option $option;
    public OptionValue $optionValue;

    // protected $rules = [
    //     'optionValue.product_id' => 'required',
    //     'optionValue.option_id' => 'required',
    //     'optionValue.value' => ['required', Rule::unique('option_values', 'value')->where('option_id', $this->option->id)],
    //     'optionValue.label' => 'nullable',
    // ];

    public function mount()
    {
        $this->optionValue = new OptionValue([
            'product_id' => $this->product->id,
            'option_id' => $this->option->id,
        ]);
    }

    public function save()
    {
        $this->validate();
        $this->optionValue->save();
        $optionValues = [];

        if ($this->product->optionValues->count() > 1) {
            $previousOptionValues = $this->product->optionValues
                ->whereNotIn('option_id', $this->optionValue->option_id)
                ->groupBy('option_id')
                ->values()
                ->toArray();
            $optionValues = array_merge($previousOptionValues, [[$this->optionValue->toArray()]]);
        } else {
            $optionValues[] = [$this->optionValue->toArray()];
        }

        // generate and save variant
        $variants = $this->product->generateVariant($optionValues);
        $this->product->saveVariant($variants);
    }

    public function render()
    {
        return view('livewire.admin.product-option-value-manager');
    }
}
