@props([
    'image' => asset('vendor/bladewind/images/empty-state.svg'),
    'heading' => '',
    'button_label' => '', // button will not be displayed if no text is passed
    'buttonLabel' => '',
    'message' => '', // message to display
    'show_image' => true, // true or false. set to false if you want to fully control the content
    'showImage' => true,
    'onclick' => '',
    'class' => '',
])
@php
    // reset variables for Laravel 8 support
    $show_image = filter_var($show_image, FILTER_VALIDATE_BOOLEAN);
    $showImage = filter_var($showImage, FILTER_VALIDATE_BOOLEAN);
    if ($buttonLabel !== $button_label) {
        $button_label = $buttonLabel;
    }
    if (!$showImage) {
        $show_image = $showImage;
    }
@endphp
<div class="bw-empty-state {{ $class }} px-4 pb-10 text-center">
    @if ($show_image == 'true')
        <img src="{{ $image }}" class="mx-auto mb-6 h-52" />
    @endif
    @if ($heading != '')
        <div
            class="px-4 pt-4 pb-3 text-2xl font-light text-slate-700 dark:text-slate-400">
            {!! $heading !!}</div>
    @endif
    @if ($message != '')
        <div class="px-6 text-slate-600/70 dark:text-slate-500">
            {!! $message !!}</div>
    @endif
    <div class="pt-2">{!! $slot !!}</div>
    @if ($button_label != '')
        <x-bladewind::button onclick="{!! $onclick !!}"
            class="mx-auto my-4 block" size="small">{{ $button_label }}
        </x-bladewind::button>
    @endif
</div>
