@props([
    'trigger' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
])
@once
    <style>
        .bw-dropmenu:focus-within .bw-dropmenu-items {
            opacity: 1;
            transform: translate(0) scale(1);
            visibility: visible;
            display: block;
            tabindex: 0;
        }
    </style>
@endonce
<div class="bw-dropmenu relative !z-40 inline-block text-left" tabindex="0">
    <button class="z-10 text-sm transition duration-150 ease-in-out">
        {!! $trigger !!}
    </button>
    <div
        class="bw-dropmenu-items !z-50 hidden origin-top-right -translate-y-2 scale-95 transform bg-white opacity-0 transition-all duration-300 dark:bg-slate-800">
        <div
            class="absolute right-0 mt-1 origin-top-right divide-y divide-gray-100 rounded-md border border-gray-200 bg-white shadow-lg outline-none dark:divide-slate-700 dark:border-slate-900 dark:bg-slate-800">
            {{ $slot }}
        </div>
    </div>
</div>
