<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrderManager extends Component
{
    public Order $order;

    public function mount()
    {
        $this->order->load([
            'user', 'orderItems.sku.product.media', 'orderItems.sku.variants.option', 'orderItems.sku.variants.optionValue'
        ]);
    }

    public function render()
    {
        return view('livewire.admin.order-manager')->layout('layouts.app');
    }
}
