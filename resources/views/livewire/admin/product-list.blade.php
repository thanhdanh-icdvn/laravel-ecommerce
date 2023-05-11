<div class="px-4">
    <div class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Products</h2>
        </div>
    </div>

    <div class="flex flex-col mt-6">
        <div class="overflow-x-scroll lg:overflow-x-auto">
            <div class="inline-block w-full align-middle">
                <div class="overflow-x-scroll border-b border-gray-200 shadow lg:overflow-x-hidden sm:rounded-lg">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase sm:px-6">Name</th>
                            <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase sm:px-6">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 sm:px-6 whitespace-nowrap">
                                    <a href="{{ route('products.edit', $product) }}" class="hover:text-indigo-500">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-900 sm:px-6 whitespace-nowrap tabular-nums">
                                    {{ $product->price }}
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
        {{ $products->links() }}
    </div>
</div>
