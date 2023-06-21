@props([
    // unique name for identifying the toggle element
    // useful for checking the value of the toggle when form is submitted
    'name' => 'bw-toggle',
    // label to display next to the toggle element
    'label' => '',
    // position of the label above.. left or right
    'label_position' => 'left',
    'labelPosition' => 'left',
    // sets or unsets disabled on the toggle element
    'disabled' => false,
    // sets or unsets checked on the toggle element
    'checked' => false,
    // background color to display when toggle is active
    'color' => 'blue',
    // should the label and toggle element be justified in their parent element
    'justified' => false,
    // how thin or thick should the toggle bar be
    'bar' => 'thick',
    // javascript function to run when toggle is clicked
    'onclick' => 'javascript:void(0)',
    // css for label
    'class' => '',
])
@php
    // reset variables for Laravel 8 support
    if ($labelPosition !== $label_position) {
        $label_position = $labelPosition;
    }
    $name = preg_replace('/[\s-]/', '_', $name);
    $disabled = filter_var($disabled, FILTER_VALIDATE_BOOLEAN);
    $checked = filter_var($checked, FILTER_VALIDATE_BOOLEAN);
    $justified = filter_var($justified, FILTER_VALIDATE_BOOLEAN);
@endphp

<label
    class="@if (!$justified) inline-flex @else flex justify-between @endif group relative items-center"
    onclick="{!! $onclick !!}">
    @if ($label_position == 'left' && $label !== '')
        <span class="{{ $class }} pr-4">{!! $label !!}</span>
    @endif
    <input type="checkbox" name="{{ $name }}"
        @if ($checked) checked @endif
        @if ($disabled) disabled @endif
        class="peer sr-only absolute left-1/2 h-full w-full -translate-x-1/2 cursor-pointer appearance-none rounded-full border-0" />
    <span
        class="@if ($bar == 'thick') h-9 @else h-4 @endif @if ($color == 'red') peer-checked:bg-red-500/80 @endif @if ($color == 'yellow') peer-checked:bg-yellow-500/80 @endif @if ($color == 'green') peer-checked:bg-green-500/80 @endif @if ($color == 'pink') peer-checked:bg-pink-500/80 @endif @if ($color == 'cyan') peer-checked:bg-cyan-500/80 @endif @if ($color == 'gray') peer-checked:bg-slate-500 @endif @if ($color == 'purple') peer-checked:bg-purple-500/80 @endif @if ($color == 'orange') peer-checked:bg-orange-500/80 @endif @if ($color == 'blue') peer-checked:bg-blue-500/80 @endif flex w-20 flex-shrink-0 cursor-pointer items-center rounded-full bg-gray-300 p-1 duration-300 ease-in-out after:h-8 after:w-8 after:rounded-full after:bg-white after:shadow-md after:duration-300 group-hover:after:translate-x-0 peer-checked:after:translate-x-10 peer-disabled:opacity-40 dark:bg-slate-700"></span>
    @if ($label_position == 'right' && $label !== '')
        <span class="{{ $class }} pl-4">{!! $label !!}</span>
    @endif
</label>
