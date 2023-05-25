<x-admin-layout>
    <x-slot name="title">{{__('Dashboard')}}</x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="grid items-end gap-6 md:grid-cols-3">
        <x-inputs.floating label="Label"></x-inputs.floating>
        <x-inputs.floating label="Label" type="filled"></x-inputs.floating>
        <x-inputs.floating label="Label" type="outlined"></x-inputs.floating>
    </div>
</x-admin-layout>
