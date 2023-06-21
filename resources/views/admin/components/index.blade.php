{{-- resources/views/admin/components/index.blade.php --}}
<x-admin-layout>
    <x-slot name="title">{{ __('Component page') }}</x-slot>
    <x-bladewind.alert>
        Your subscription is expiring in 19 days.
        <a href="#"
            class="cursor-pointer text-red-500 underline transition-all duration-1000 hover:no-underline">Renew
            now</a>
    </x-bladewind.alert>
</x-admin-layout>
