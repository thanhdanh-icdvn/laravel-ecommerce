@props([
    'image' => null,
    'alt' => 'image',
    'size' => 'regular',
    'class' => 'mr-2 mt-2',
    'stacked' => false,
    'sizing' => [
        'tiny' => 6,
        'small' => 8,
        'medium' => 10,
        'regular' => 12,
        'big' => 16,
        'huge' => 20,
        'omg' => 28,
    ],
])
@php
    $avatar = $image ?: asset('vendor/bladewind/images/avatar.png');
    $stacked = filter_var($stacked, FILTER_VALIDATE_BOOLEAN);
@endphp

<span
    class="hidden h-6 h-8 h-10 h-12 h-16 h-20 h-28 w-6 w-8 w-10 w-12 w-16 w-20 w-28"></span>
<div
    class="w-{{ $sizing[$size] }} h-{{ $sizing[$size] }} {{ $class }} @if ($stacked) -ml-5 @endif inline-block overflow-hidden rounded-full ring-2 ring-white ring-offset-2 dark:ring-slate-900">
    <img src="{{ $avatar }}" alt="{{ $alt }}"
        class="object-cover object-top" />
</div>
