<div>
    <div class="mb-3">
        @forelse($option->optionValues as $optionValue)
            <div class="relative inline-flex px-3 py-2 border border-gray-300 rounded group">
                <button type="button" wire:click="confirmOptionValueDeletionFor('{{ $optionValue->id }}')" class="absolute top-0 right-0 inline-flex items-center justify-center w-3 h-3 text-white transition-opacity bg-red-600 rounded-full opacity-0 ring-1 ring-white hover:bg-red-400 group-hover:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <span class="font-sans text-sm font-medium text-gray-400">
                    {{ $optionValue->label ?? $optionValue->value }}
                </span>
            </div>
        @empty
            <p class="text-sm text-gray-600">This option is ready to be used but has no value yet!</p>
        @endforelse
    </div>

    <form wire:submit.prevent="save">
        <div class="space-y-6 lg:flex lg:space-x-6 lg:space-y-0">
            <div class="lg:flex-1">
                <x-label value="{{ __('Value') }}" />
                <x-input wire:model.defer="optionValue.value" type="text" class="block w-full mt-1 sm:text-sm" placeholder="{{ __('Option value for ') . $option->name }}" />
                <x-input-error for="optionValue.value" class="mt-2" />
            </div>
            <div class="lg:flex-1">
                <x-label value="{{ __('Label') }}" />
                <x-input wire:model.defer="optionValue.label" type="text" class="block w-full mt-1 sm:text-sm" placeholder="{{ __('Option label for ') . $option->name }}" />
                <x-input-error for="optionValue.label" class="mt-2" />
            </div>
            <div class="lg:flex lg:items-end">
                <x-primary-button>
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</div>
