<div x-data="setupEditor(@entangle($attributes->wire('model')).defer)" x-init="() => init($refs.element)" wire:ignore {{ $attributes->whereDoesntStartWith('wire:model') }}>
    <div class="pb-5 space-y-1 border-b">
        {{-- Paragraph --}}
        <button type="button" @click="setParagraph()" class="inline-flex items-center p-2 border rounded-md"
            :class="{ 'bg-indigo-500 text-white border-transparent hover:bg-indigo-600': isActive('paragraph',
                updatedAt), 'hover:bg-gray-100': !isActive('paragraph', updatedAt) }">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3 h-3" aria-hidden="true">
                <path fill="currentColor"
                    d="M448 63.1C448 81.67 433.7 96 416 96H384v352c0 17.67-14.33 32-31.1 32S320 465.7 320 448V96h-32v352c0 17.67-14.33 32-31.1 32S224 465.7 224 448v-96H198.9c-83.57 0-158.2-61.11-166.1-144.3C23.66 112.3 98.44 32 191.1 32h224C433.7 32 448 46.33 448 63.1z" />
            </svg>
            <span class="sr-only">paragraph</span>
        </button>
        {{-- Bold --}}
        <button type="button" @click="toggleBold()" class="inline-flex items-center p-2 border rounded-md"
            :class="{ 'bg-indigo-500 text-white border-transparent hover:bg-indigo-600': isActive('bold',
                updatedAt), 'hover:bg-gray-100': !isActive('bold', updatedAt) }">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3" aria-hidden="true">
                <path fill="currentColor"
                    d="M321.1 242.4C340.1 220.1 352 191.6 352 160c0-70.59-57.42-128-128-128L32 32.01c-17.67 0-32 14.31-32 32s14.33 32 32 32h16v320H32c-17.67 0-32 14.31-32 32s14.33 32 32 32h224c70.58 0 128-57.41 128-128C384 305.3 358.6 264.8 321.1 242.4zM112 96.01H224c35.3 0 64 28.72 64 64s-28.7 64-64 64H112V96.01zM256 416H112v-128H256c35.3 0 64 28.71 64 63.1S291.3 416 256 416z" />
            </svg>
            <span class="sr-only">bold</span>
        </button>
        {{-- Italic --}}
        <button type="button" @click="toggleItalic()" class="inline-flex items-center p-2 border rounded-md"
            :class="{ 'bg-indigo-500 text-white border-transparent hover:bg-indigo-600': isActive('italic',
                updatedAt), 'hover:bg-gray-100': !isActive('italic', updatedAt) }">
            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true">
                <path fill="currentColor"
                    d="M384 64.01c0 17.69-14.31 32-32 32h-58.67l-133.3 320H224c17.69 0 32 14.31 32 32s-14.31 32-32 32H32c-17.69 0-32-14.31-32-32s14.31-32 32-32h58.67l133.3-320H160c-17.69 0-32-14.31-32-32s14.31-32 32-32h192C369.7 32.01 384 46.33 384 64.01z" />
            </svg>
            <span class="sr-only">italic</span>
        </button>
    </div>
    <div x-ref="element" class="overflow-y-scroll prose sm:prose-sm md:prose-base max-h-[500px] px-1"></div>
</div>
