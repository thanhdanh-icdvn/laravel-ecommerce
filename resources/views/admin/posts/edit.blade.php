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
    <x-slot name="title">{{ __('Cập nhật bài viết') }}</x-slot>

    <div class="flex flex-col">
        <div class="block">
            <h2 class="mt-0 mb-2 text-4xl font-medium leading-tight text-primary">Update post</h2>
            <x-buttons.back backUrl="{{ route('admin.posts.index') }}">Back</x-buttons.back>
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

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="mt-4" novalidate
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <div class="col-span-3 space-y-4">
                    <div class="block space-y-1">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                            :value="old('name', $post->name)" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="block space-y-1">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block w-full mt-1" type="text" name="description"
                            :value="old('description', $post->description)" required />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <div class="block space-y-1">
                        <x-input-label for="body" :value="__('Body')" />
                        <x-forms.tinymce-editor required name="body" id="body" :error="$errors->get('body')">
                            {{ old('body', $post->body) }}
                        </x-forms.tinymce-editor>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>
                </div>
                <div class="space-y-4 col-span-auto">
                    <div class="block">
                        <x-input-label for="body" :value="__('Post category')" />
                        <select id="default"
                            class="bg-gray-50 border border-gray-300 text-gray-900 mb-2 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a category</option>
                            @foreach ($cates as $cate)
                                <option value="{{ $cate['id'] }}">{{ $cate['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="block">
                        <x-input-label for="featured_image" :value="__('Featured Image')" />
                        <x-text-input id="featured_image" class="block w-full mt-1" type="file" name="featured_image"
                            :value="old('featured_image')" required accept="image/png ,image/jpeg , image/jpg" :error="$errors->get('featured_image')" />
                        <x-input-error :messages="$errors->get('featured_image')" class="mt-2" />
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <img src="" class="max-w-xs img-thumbnail aspect-square" id="featured_image-previewer">
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    @push('scripts')
        <script src="{{ asset('js/admin/image-preview.js') }}" referrerpolicy="origin"></script>
    @endpush
</x-admin-layout>
