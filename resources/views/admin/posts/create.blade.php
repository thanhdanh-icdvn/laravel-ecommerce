@props([
    'cates' => [
        [
            'id' => 1,
            'name' => 'Danh mục 1',
        ],
        [
            'id' => 2,
            'name' => 'Danh mục 2',
        ],
        [
            'id' => 3,
            'name' => 'Danh mục 3',
        ],
        [
            'id' => 4,
            'name' => 'Danh mục 4',
        ],
    ],
])
<x-admin-layout>
    <x-slot name="title">{{ __('Thêm bài viết') }}</x-slot>

    <div class="flex flex-col">
        <div class="block">
            <h2
                class="text-primary mt-0 mb-2 text-4xl font-medium leading-tight">
                Add new post
            </h2>
            <x-buttons.back backUrl="{{ route('admin.posts.index') }}">Back
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

    <form action="{{ route('admin.posts.store') }}" method="POST" class="mt-4"
        novalidate enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <div class="col-span-3 space-y-4">
                    <div class="block space-y-1">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="mt-1 block w-full"
                            type="text" name="name" :value="old('name')"
                            required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="block space-y-1">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="mt-1 block w-full"
                            type="text" name="description" :value="old('description')"
                            required />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <div class="block space-y-1">
                        <x-input-label for="body" :value="__('Body')" />
                        <x-forms.tinymce-editor required name="body"
                            id="body" :error="$errors->get('body')">
                            {{ old('body') }}
                        </x-forms.tinymce-editor>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>
                </div>
                <div class="col-span-auto space-y-4">
                    <div class="block">
                        <x-input-label for="body" :value="__('Category')" />
                        <select id="default"
                            class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            <option selected>Choose a category</option>
                            @foreach ($cates as $cate)
                                <option value="{{ $cate['id'] }}">
                                    {{ $cate['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="block">
                        <x-input-label for="featured_image"
                            :value="__('Featured Image')" />
                        <x-text-input id="featured_image"
                            class="mt-1 block w-full" type="file"
                            name="featured_image" :value="old('featured_image')" required
                            accept="image/png ,image/jpeg , image/jpg"
                            :error="$errors->get('featured_image')" />
                        <x-input-error :messages="$errors->get('featured_image')" class="mt-2" />
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <img src=""
                            class="img-thumbnail aspect-square max-w-xs"
                            id="featured_image-previewer">
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <button type="submit"
                    class="mr-2 mb-2 rounded-full bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    @push('scripts')
        <script src="{{ asset('js/admin/image-preview.js') }}" referrerpolicy="origin">
        </script>
    @endpush
</x-admin-layout>
