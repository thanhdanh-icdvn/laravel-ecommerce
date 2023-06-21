@props([
    'heading' => 'Error!',
    'description' => 'Something went wrong',
    'button_text' => 'Go to homepage',
    'buttonText' => 'Go to homepage',
    'button_url' => '/',
    'buttonUrl' => '/',
    'image' => '',
])
@php
    // reset variables for Laravel 8 support
    if ($buttonText !== $button_text) {
        $button_text = $buttonText;
    }
    if ($buttonUrl !== $button_url) {
        $button_url = $buttonUrl;
    }
@endphp
<div class="flex items-center justify-center">
    <div class="max-w-xl px-8">
        <div class="p-6">{!! $image !!}</div>
        <h1
            class="zoom-out -mt-10 text-center text-2xl font-extralight tracking-wider text-red-400">
            {{ $heading }}</h1>
        <p class="mt-2 mb-12 px-12 text-center font-light text-gray-600/80">
            {!! $description !!}
        </p>
        <div class="pt-2 text-center">
            <a href="{{ $button_url }}">
                <x-bladewind::button type="primary" size="small">
                    {{ $button_text }}</x-bladewind::button>
            </a>
        </div>
    </div>
</div>
