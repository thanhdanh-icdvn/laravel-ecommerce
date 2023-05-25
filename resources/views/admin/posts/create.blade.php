<x-admin-layout>
    <x-slot name="title">{{__('Thêm bài viết')}}</x-slot>

    <div class="flex flex-col">
        <div class="block">
            <h2 class="mt-0 mb-2 text-4xl font-medium leading-tight text-primary">Add new post</h2>
            <x-buttons.back backUrl="{{route('posts.index')}}">Back</x-buttons.back>
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

    <form action="{{ route('posts.store') }}" method="POST" class="mt-4" novalidate>
        @csrf
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-span-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')"
                    required autofocus/>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            {{-- <div class="col-span-2">
                <x-input-label for="slug" :value="__('Slug')" />
                <x-text-input id="slug" class="block w-full mt-1" type="text" name="slug" :value="old('slug')"
                    required autofocus/>
                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
            </div> --}}
            <div class="col-span-4">
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input id="description" class="block w-full mt-1" type="text" name="description"
                    :value="old('description')" required />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="col-span-full">
                <x-input-label for="body" :value="__('Body')" />
                <x-forms.tinymce-editor required name="body" id="body">{{ old('body') }}
                </x-forms.tinymce-editor>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
            </div>
        </div>
        <div class="mt-4 text-center">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</x-admin-layout>
