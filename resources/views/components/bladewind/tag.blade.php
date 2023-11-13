@props([
    'label' => '',
    'color' => 'blue',
    'class' => '',
    'can_close' => false,
    'canClose' => false,
    'rounded' => false,
    'add_clearing' => true,
    'addClearing' => true,
    'shade' => 'faint',
    'color_weight' => [
        'faint' => 200,
        'dark' => 500,
    ],
    'text_color_weight' => [
        'faint' => 500,
        'dark' => 50,
    ],
    'onclick' => '',
    'id' => uniqid(),
    'add_id_prefix' => true,
    'addIdPrefix' => true,
])
@php
    // reset variables for Laravel 8 support
    $can_close = filter_var($can_close, FILTER_VALIDATE_BOOLEAN);
    $canClose = filter_var($canClose, FILTER_VALIDATE_BOOLEAN);
    $add_id_prefix = filter_var($add_id_prefix, FILTER_VALIDATE_BOOLEAN);
    $addIdPrefix = filter_var($addIdPrefix, FILTER_VALIDATE_BOOLEAN);
    $rounded = filter_var($rounded, FILTER_VALIDATE_BOOLEAN);
    $add_clearing = filter_var($add_clearing, FILTER_VALIDATE_BOOLEAN);
    $addClearing = filter_var($addClearing, FILTER_VALIDATE_BOOLEAN);
    if ($canClose) {
        $can_close = $canClose;
    }
    if (!$addIdPrefix) {
        $add_id_prefix = $addIdPrefix;
    }
    $rounded_class = $rounded ? 'rounded-full' : 'rounded-md';
    $clearing_css = $add_clearing ? 'mb-3' : '';
@endphp
<span class="bg-blue-200"></span>
<span class="text-red-500"></span>
<label id="@if ($add_id_prefix) bw- @endif{{ $id }}"
    class="{{ $rounded_class }} {{ $clearing_css }} bg-{{ $color }}-{{ $color_weight[$shade] }} text-{{ $color }}-{{ $text_color_weight[$shade] }} {{ $class }} relative inline-block whitespace-nowrap px-[12px] text-[10px] uppercase tracking-widest">
    {{ $label }}
    @if ($can_close)
        <a href="javascript:void(0)"
            onclick="@if ($onclick == '') this.parentElement.remove()@else{!! $onclick !!} @endif">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="text-{{ $color }}-{{ $text_color_weight[$shade] }} -mr-1 -mt-0.5 inline h-5 w-5 p-1 opacity-70 hover:opacity-100"
                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
    @endif
</label>
