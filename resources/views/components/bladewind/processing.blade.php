@props([
    'name' => 'processing',

    // the process indicator is rendered within the page and so by default
    // its hidden until a process needs to be started
    // you can set this to false to unhide the process indicator on page load
    'hide' => true,

    // message to display when the process is running
    'message' => '',
    'class' => '',
])
@php
    $name = preg_replace('/[\s]/', '-', $name);
    $hide = filter_var($hide, FILTER_VALIDATE_BOOLEAN);
@endphp
<div
    class="{{ $name }} @if ($hide) hidden @endif {{ $class }} mt-6 text-center text-sm">
    <x-bladewind::spinner />
    <div class="process-message my-3 text-gray-400">{{ $message }}</div>
</div>
