<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderList extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.admin.order-list', [
            'orders' => Order::query()->with('user', 'orderItems')->latest()->paginate(),
        ])->layout('layouts.app');
    }
}
