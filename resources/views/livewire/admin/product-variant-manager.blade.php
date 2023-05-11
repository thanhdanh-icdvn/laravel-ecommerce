<div>
    <x-card class="mt-5 -mx-4 sm:-mx-0">
        <x-slot name="header">
            <div class="mt-2 ml-4">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Variants</h3>
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="-mx-4 -mt-6 space-y-6 sm:-mx-6">
                <div x-data class="relative overflow-auto max-h-96">
                    <table class="min-w-full">
                        <thead>
                            <tr class="relative">
                                <th class="sticky top-0 z-10 py-3 pl-6 pr-2 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-opacity-75 border-b bg-gray-50 backdrop-blur backdrop-filter">
                                    Variant
                                </th>
                                <th class="sticky top-0 z-10 px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-opacity-75 border-b bg-gray-50 backdrop-blur backdrop-filter">
                                    Price
                                </th>
                                <th class="sticky top-0 z-10 px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-opacity-75 border-b bg-gray-50 backdrop-blur backdrop-filter">
                                    Stock
                                </th>
                                <th class="sticky top-0 z-10 py-3 pl-2 pr-6 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-opacity-75 border-b bg-gray-50 backdrop-blur backdrop-filter">
                                    SKU
                                </th>
                                <th class="sticky top-0 z-10 py-3 pl-2 pr-6 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-opacity-75 border-b bg-gray-50 backdrop-blur backdrop-filter">
                                    Barcode
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <form wire:submit.prevent="save">
                                @foreach($product->skus as $index => $sku)
                                    <tr wire:key="sku-field-{{ $sku->id }}">
                                        <td class="py-4 pl-6 pr-2 text-sm font-medium text-gray-900 border-b border-gray-200 whitespace-nowrap">
                                            <div class="flex">
                                                @foreach($sku->variants as $variant)
                                                    <p @class(['ml-2 pl-2 border-l border-gray-200' => !$loop->first])>
                                                        {{ $variant->optionValue->label ?? $variant->optionValue->value }}
                                                    </p>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="px-2 py-4 text-sm text-gray-500 border-b border-gray-200 whitespace-nowrap">
                                            <x-label for="sku-{{ $index }}-price" value="Price" class="sr-only" />
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <span class="text-gray-500 sm:text-sm">
                                                        {{ config('money.'.config('app.currency').'.symbol') }}
                                                    </span>
                                                </div>
                                                <x-input wire:model.defer="skus.{{ $index }}.price" wire:change.debounce="save" @click="$event.target.select();" @keyup.enter="$event.target.blur();" type="text" id="sku-{{ $index }}-price" class="block shadow-none w-28 sm:text-sm pl-7" />
                                            </div>
                                            <x-input-error for="skus.{{ $index }}.price" class="mt-2" />
                                        </td>
                                        <td class="px-2 py-4 text-sm text-gray-500 border-b border-gray-200 whitespace-nowrap">
                                            <x-label for="sku-{{ $index }}-stock" value="Price" class="sr-only" />
                                            <x-input wire:model.defer="skus.{{ $index }}.stock" wire:change.debounce="save" @click="$event.target.select();" @keyup.enter="$event.target.blur();" type="number" id="sku-{{ $index }}-stock" class="block shadow-none w-28 sm:text-sm" />
                                            <x-input-error for="skus.{{ $index }}.stock" class="mt-2" />
                                        </td>
                                        <td class="py-4 pl-2 pr-6 text-sm font-medium text-gray-900 border-b border-gray-200 whitespace-nowrap">
                                            <x-label for="sku-{{ $index }}-name" value="Name" class="sr-only" />
                                            <x-input wire:model.defer="skus.{{ $index }}.name" wire:change.debounce="save" @click="$event.target.select();" @keyup.enter="$event.target.blur();" type="text" id="sku-{{ $index }}-name" class="block w-40 shadow-none sm:text-sm" />
                                            <x-input-error for="skus.{{ $index }}.name" class="mt-2" />
                                        </td>
                                        <td class="py-4 pl-2 pr-6 text-sm font-medium text-gray-900 border-b border-gray-200 whitespace-nowrap">
                                            <x-label for="sku-{{ $index }}-barcode" value="Barcode" class="sr-only" />
                                            <x-input wire:model.defer="skus.{{ $index }}.barcode" wire:change.debounce="save" @click="$event.target.select();" @keyup.enter="$event.target.blur();" type="text" id="sku-{{ $index }}-barcode" class="block w-40 shadow-none sm:text-sm" />
                                            <x-input-error for="skus.{{ $index }}.barcode" class="mt-2" />
                                        </td>
                                    </tr>
                                @endforeach
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </x-slot>
    </x-card>
</div>
