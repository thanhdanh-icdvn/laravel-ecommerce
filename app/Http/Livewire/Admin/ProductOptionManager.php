<?php

namespace App\Http\Livewire\Admin;

use App\Models\Option;
use Livewire\Component;

class ProductOptionManager extends Component
{

    public Option $option;
    public bool $showCreateModal = false;

    protected $rules = [
        'option.name' => 'required|string',
        'option.visual' => 'required|string',
    ];

    public Option $optionBeingDeleted;
    public bool $confirmingOptionDeletion = false;

    public function create()
    {
        $this->option = new Option();
        $this->showCreateModal = true;
    }

    public function save()
    {
        $this->validate();
        $this->product->options()->save($this->option);
        // remove all existing skus
        $this->product->skus()->delete();
        // generate and save variant
        $optionValues = $this->product->optionValues->groupBy('option_id')->values()->toArray();
        $variants = $this->product->generateVariant($optionValues);
        $this->product->saveVariant($variants);
    }

    public function confirmOptionDeletionFor(Option $option)
    {
        $this->confirmingOptionDeletion = true;
        $this->optionBeingDeleted = $option;
    }

    public function delete()
    {
        $this->optionBeingDeleted->optionValues()->delete();
        $this->optionBeingDeleted->delete();
    }

    public function render()
    {
        return view('livewire.admin.product-option-manager');
    }
}
