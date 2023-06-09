<a {{ $attributes->merge(['class' => 'inline-flex items-center justify-center flex-shrink-0 gap-1 px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700']) }}
    href="{!! $backUrl !!}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor" class="h-6 w-6 pb-1">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
    </svg>
    {{ $slot }}
</a>
