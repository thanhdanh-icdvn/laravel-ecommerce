<div>
    <div class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Orders</h2>
        </div>
    </div>

    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase sm:px-6">ID</th>
                            <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase sm:px-6">Customer</th>
                            <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase sm:px-6">Status</th>
                            <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase sm:px-6">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 sm:px-6 whitespace-nowrap">
                                    <a href="{{ route('admin.orders.show', $order) }}" class="hover:text-indigo-500">
                                        {{ $order->id }}
                                    </a>
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 sm:px-6 whitespace-nowrap">
                                    {{ $order->user->name }}
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 sm:px-6 whitespace-nowrap">
                                    <div class="flex items-center space-x-1">
                                        <span class="block w-2 h-2 rounded-full" style="background-color: {{ $order->status->color() }}"></span>
                                        <span>{{ $order->status->label() }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-right text-gray-900 sm:px-6 whitespace-nowrap tabular-nums">
                                    <x-money :amount="$order->subtotal" :currency="config('app.currency')" />
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        {{ $orders->links() }}
    </div>
</div>
