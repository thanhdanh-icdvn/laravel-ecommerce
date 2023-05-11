<x-slot name="content">
    <div class="space-y-5">
        @foreach($product->options as $option)
        <div class="relative w-full p-4 border border-gray-300 rounded-md">
            <div class="absolute -top-3 left-3 px-0.5 bg-white flex items-center space-x-1">
                <button wire:click="confirmOptionDeletionFor('{{ $option->id }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-400 cursor-pointer hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
                <span class="flex items-center text-sm font-medium text-gray-700">{{ $option->name }}</span>
            </div>
        </div>
        @endforeach
    </div>
</x-slot>
