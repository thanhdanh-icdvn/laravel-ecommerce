<x-admin-layout>
    <x-slot name="title">{{ __('Chi tiết người dùng') }}</x-slot>
    <div class="flex flex-col">
        <div class="block">
            <h2
                class="text-primary mt-0 mb-2 text-4xl font-medium leading-tight">
                User detail</h2>
            <x-buttons.back backUrl="{{ route('admin.users.index') }}">Back
            </x-buttons.back>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
    </div>
</x-admin-layout>
