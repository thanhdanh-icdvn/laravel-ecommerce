<div>
    <form wire:submit.prevent="save">
        <x-card class="mt-5 -mx-4 sm:-mx-0">
            <x-slot name="header">
                <div class="mt-2 ml-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Organization</h3>
                </div>
            </x-slot>
            <x-slot name="content">
                <div>
                    <x-label
                        for="categories"
                        value="{{ __('Categories') }}"
                    />
                    <x-select
                        wire:model.defer="selectedCategories"
                        class="block w-full mt-1"
                        multiple
                    >
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                @selected(in_array($category->id, $product->categories->pluck('id')->toArray()))
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </x-select>
                </div>
            </x-slot>
            <x-slot name="footer">
                <div class="flex items-center justify-end">
                    <x-action-message on="saved" class="mr-2" />
                    <x-primary-button wire:loading.attr="disabled">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </x-slot>
        </x-card>
    </form>
</div>
