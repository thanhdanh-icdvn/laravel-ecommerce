<x-admin-layout>
    <x-slot name="title">{{ __('Cập nhật người dùng') }}</x-slot>

    <div class="flex flex-col">
        <div class="block">
            <h2
                class="text-primary mt-0 mb-2 text-4xl font-medium leading-tight">
                Update user</h2>
            <x-buttons.back backUrl="{{ route('admin.users.index') }}">Back
            </x-buttons.back>
        </div>
    </div>

    @if ($errors->any())
        <div class="my-4 rounded-lg bg-red-50 p-4 text-sm text-red-500">
            <p><strong>There were some problems with your input.</strong></p>
            <ul class="list-inside list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST"
        class="mt-4" novalidate>
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-span-2">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="mt-1 block w-full"
                    type="text" name="name" :value="old('name', $user->name)" required
                    autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="col-span-2">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="mt-1 block w-full"
                    type="email" name="email" :value="old('email', $user->email)" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
        <div class="mt-4 text-center">
            <button type="submit"
                class="mr-2 mb-2 rounded-full bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</x-admin-layout>
