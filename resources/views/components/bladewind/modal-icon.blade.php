@props([
    // determines types of icon to display. Available options: info, success, error, warning, empty
    // only the empty type has no icon. useful if you want your modal to contain a form
    'type' => 'info',
    'class' => '',
])
@php
    $success_css = $type !== 'success' ? 'hidden' : '';
    $error_css = $type !== 'error' ? 'hidden' : '';
    $info_css = $type !== 'info' ? 'hidden' : '';
    $warning_css = $type !== 'warning' ? 'hidden' : '';
@endphp
<x-bladewind::icon name="check-circle"
    class="modal-icon success {{ $class }} {{ $success_css }} h-14 w-14 rounded-full text-green-600 dark:text-green-600" />
<x-bladewind::icon name="hand-raised"
    class="modal-icon error {{ $class }} {{ $error_css }} h-14 w-14 rounded-full text-red-600 dark:text-red-600" />
<x-bladewind::icon name="exclamation-triangle"
    class="modal-icon warning {{ $class }} {{ $warning_css }} h-14 w-14 rounded-full text-yellow-700 dark:text-yellow-700" />
<x-bladewind::icon name="information-circle"
    class="modal-icon info {{ $class }} {{ $info_css }} h-14 w-14 rounded-full text-blue-600 dark:text-blue-600" />
