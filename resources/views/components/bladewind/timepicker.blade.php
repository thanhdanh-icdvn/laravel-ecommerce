@props([
    // name of the datepicker. This name is used when posting the form with the datepicker
    'name' => 'bw-datepicker',
    // text to display in the label that identifies the input field
    'label' => 'Date',
    // is the value of the date field required? used for form validation. default is false
    'required' => 'false',
    // what should the time hours be displayed as. Default is 12 hour format
    // available options are 12, 24
    'hours_as' => '12',
    'hoursAs' => '12',
    // what format should the time be displayed in
    'time_format' => 'hh:mm',
    'timeFormat' => 'hh:mm',
    // when the timepicker is included, should the time be displayed with seconds. Default is false
    'show_seconds' => 'false',
    'showSeconds' => 'false',

    'selected_hours' => '',
    'selectedHours' => '',
    'selected_minutes' => '',
    'selectedMinutes' => '',
    'selected_seconds' => '',
    'selectedSeconds' => '',

    // By default only placeholders are displayed in the textbox(es)
    'has_label' => 'false',
    'hasLabel' => 'false',
])
@php
    // reset variables for Laravel 8 support
    $hours_as = $hoursAs;
    $time_format = $timeFormat;
    $show_seconds = $showSeconds;
    $selected_hours = $selectedHours;
    $selected_minutes = $selectedMinutes;
    $selected_seconds = $selectedSeconds;
    $has_label = $hasLabel;
    //--------------------------------------------------------

    $name = preg_replace('/[\s-]/', '_', $name);
    $required_symbol = $has_label == 'false' && $required == 'true' ? ' *' : '';
    $is_required = $required == 'true' ? 'required' : '';
@endphp
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class="flex" x-data="{
    hours_open: false,
    minutes_open: false,
    seconds_open: false,
    formats_open: false,
    hours: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, '00'],
    minutes: ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58],
    format: ['AM', 'PM']
}">
    <div class="relative w-16">
        <div x-on:click="hours_open = ! hours_open"
            class="flex cursor-pointer items-center justify-between border-t border-l border-b border-gray-200 bg-white p-3">
            <span x-ref="hh" class="text-sm">HH</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                class="mx-1 h-3 w-3 opacity-40" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        <div class="absolute h-52 w-16 overflow-y-scroll text-center"
            x-show="hours_open" x-on:click.outside="hours_open=false"
            x-transition>
            <div class="divide-y border border-gray-200 bg-white">
                <template x-for="hour in hours">
                    <div x-text="hour"
                        class="cursor-pointer py-2 hover:bg-gray-100"
                        x-on:click="$refs.hh.innerText=hour; hours_open=false">
                    </div>
                </template>
            </div>
        </div>
    </div>
    <div class="hidden text-2xl">:</div>

    <div class="relative w-16">
        <div x-on:click="minutes_open = !minutes_open"
            class="flex cursor-pointer items-center justify-between border-t border-b border-gray-200 bg-white p-3">
            <span class="text-sm" x-ref="mm">MM</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 opacity-40"
                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        <div class="absolute h-52 w-16 overflow-y-scroll text-center"
            x-show="minutes_open" x-on:click.outside="minutes_open=false">
            <div class="-mt-2 divide-y border border-gray-200 bg-white">
                <template x-for="minute in minutes">
                    <div x-text="minute"
                        class="cursor-pointer py-2 hover:bg-gray-100"
                        x-on:click="$refs.mm.innerText=minute; minutes_open=false">
                    </div>
                </template>
            </div>
        </div>
    </div>
    <div class="hidden px-1 text-2xl">:</div>

    <div class="relative w-16">
        <div x-on:click="seconds_open = !seconds_open"
            class="flex cursor-pointer items-center justify-between border-t border-b border-gray-200 bg-white p-3">
            <span class="text-sm" x-ref="ss">SS</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 opacity-40"
                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        <div class="absolute h-52 w-16 overflow-y-scroll text-center"
            x-show="seconds_open" x-on:click.outside="seconds_open=false">
            <div class="-mt-2 divide-y border border-gray-200 bg-white">
                <template x-for="second in minutes">
                    <div x-text="second"
                        class="cursor-pointer py-2 hover:bg-gray-100"
                        x-on:click="$refs.ss.innerText=second; seconds_open=false">
                    </div>
                </template>
            </div>
        </div>
    </div>

    <div class="relative w-16">
        <div x-on:click="formats_open = !formats_open"
            class="flex cursor-pointer items-center justify-between border border-gray-200 bg-white p-3">
            <span x-ref="fmt" class="text-sm">AM</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 opacity-40"
                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        <div class="absolute h-52 w-16 overflow-y-scroll text-center"
            x-show="formats_open" x-on:click.outside="formats_open=false">
            <div class="-mt-2 divide-y border border-gray-200 bg-white">
                <template x-for="f in format">
                    <div x-text="f"
                        class="cursor-pointer py-2 hover:bg-gray-100"
                        x-on:click="$refs.fmt.innerText=f; formats_open=false">
                    </div>
                </template>
            </div>
        </div>
    </div>

</div>
