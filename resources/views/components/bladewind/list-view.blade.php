@props([
    'transparent' => false,
    'compact' => false,
    'class' => '',
])
@php
    $transparent = filter_var($transparent, FILTER_VALIDATE_BOOLEAN);
    $compact = filter_var($compact, FILTER_VALIDATE_BOOLEAN);
@endphp
<ul role="list"
    class="@if (!$transparent) bg-white dark:bg-slate-800/80 @endif {{ $class }} divide-y divide-slate-100 rounded-tl-lg rounded-tr-lg rounded-br-lg rounded-bl-lg dark:divide-slate-700/50">
    {{ $slot }}
</ul>
