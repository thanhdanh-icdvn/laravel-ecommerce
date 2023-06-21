@props([
    'status' => 'pending',
    'stacked' => false,
    'date' => '',
    'label' => '',
    'last' => false,
    'color' => 'cyan',
    'coloring' => [
        'bg' => [
            'red' => 'bg-red-500',
            'yellow' => 'bg-yellow-500',
            'green' => 'bg-emerald-500',
            'blue' => 'bg-blue-500',
            'orange' => 'bg-orange-500',
            'purple' => 'bg-purple-500',
            'cyan' => 'bg-cyan-500',
            'pink' => 'bg-pink-500',
            'black' => 'bg-black',
        ],
        'border' => [
            'red' => 'border-red-500',
            'yellow' => 'border-yellow-500',
            'green' => 'border-emerald-500',
            'blue' => 'border-blue-500',
            'orange' => 'border-orange-500',
            'purple' => 'border-purple-500',
            'cyan' => 'border-cyan-500',
            'pink' => 'border-pink-500',
            'black' => 'border-black',
        ],
        'text' => [
            'red' => 'text-red-500',
            'yellow' => 'text-yellow-500',
            'green' => 'text-emerald-500',
            'blue' => 'text-blue-500',
            'orange' => 'text-orange-500',
            'purple' => 'text-purple-500',
            'cyan' => 'text-cyan-500',
            'pink' => 'text-pink-500',
            'black' => 'text-black',
        ],
    ],
])
@php
    $stacked = filter_var($stacked, FILTER_VALIDATE_BOOLEAN);
    $last = filter_var($last, FILTER_VALIDATE_BOOLEAN);
@endphp
<div class="flex text-slate-600">
    @if (!$stacked)
        <div
            class="{{ $coloring['text'][$color] }} w-[63px] whitespace-nowrap pr-5 pt-1 font-semibold">
            {!! $date !!}</div>
    @endif
    <div class="z-20">
        <div
            class="@if ($status == 'pending') bg-white border-4 {{ $coloring['border'][$color] }}  @else {{ $coloring['bg'][$color] }} @endif h-8 w-8 rounded-full">
        </div>
    </div>
    <div class="@if (!$last) border-l-4 {{ $coloring['border'][$color] }} @endif z-10 pl-8 pb-14 text-lg"
        style="margin-left: -18px">
        @if ($stacked)
            <div class="{{ $coloring['text'][$color] }} font-semibold">
                {!! $date !!}</div>
        @endif
        {!! $label !!}
    </div>
</div>
