<x-admin-layout>
    <x-slot name="title">{{__('Cập nhật người dùng')}}</x-slot>

    <div class="flex flex-col">
        <div class="block">
            <h2 class="mt-0 mb-2 text-4xl font-medium leading-tight text-primary">Update user</h2>
            <x-buttons.back backUrl="{{route('admin.users.index')}}">Back</x-buttons.back>
        </div>
    </div>

    @if ($errors->any())
        <div class="p-4 my-4 text-sm text-red-500 rounded-lg bg-red-50">
            <p><strong>There were some problems with your input.</strong></p>
            <ul class="pl-5 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="mt-4" novalidate>
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-span-2">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name', $user->name)"
                    required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="col-span-2">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $user->email)"
                    required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
        <div class="mt-4 text-center">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</x-admin-layout>
