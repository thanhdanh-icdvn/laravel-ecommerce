<x-admin-layout>
    <x-slot name="title">{{ __('Danh sách bài viết') }}</x-slot>
    <div class="content__head">
        <div
            class="flex flex-wrap items-center justify-between transition-all duration-300">
            <h2
                class="text-primary mt-0 mb-2 inline-block text-4xl font-medium leading-tight">
                Post list</h2>
            <div class="block">
                <a href="{{ route('admin.posts.create') }}" role="button"
                    class="inline-bock ml-auto rounded-full bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Add
                    new post</a>
            </div>
        </div>
        <div class="mx-auto mt-4 block w-full text-center lg:w-1/2">
            <x-input-search />
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="mb-2 rounded-b border-t-4 border-green-500 bg-green-100 px-4 py-3 text-green-900 shadow-sm"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="mr-4 h-6 w-6 fill-current text-green-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-green-500">Notify</p>
                    <p class="text-sm text-green-500">{{ $message }}</p>
                </div>
            </div>
        </div>
    @endif

    <div class="table-wrap relative flex w-full flex-col pb-4">
        <table
            class="table min-w-full border text-sm font-light dark:border-neutral-300">
            <thead
                class="border-b bg-slate-200 font-medium dark:border-neutral-300">
                <tr class="">
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">No
                    </th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">Title
                    </th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">
                        Description</th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">Slug
                    </th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">
                        Thumbnail</th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">Body
                    </th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">
                        Author</th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">
                        Created At</th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">
                        Updated At</th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">
                        Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr
                        class="border-b hover:bg-gray-100 dark:border-neutral-300 dark:hover:bg-gray-700">
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 text-center font-medium dark:border-neutral-300">
                            {{ ++$i }}
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $post->name }}
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $post->description }}
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $post->slug }}
                        </td>
                        <td
                            class="block whitespace-nowrap border-r px-6 py-4 text-center font-medium dark:border-neutral-300">
                            @if (is_null($post->featured_image))
                                <p>No featured image</p>
                            @else
                                <img src="{{ asset('storage/images/post_images/' . $post->featured_image) }}"
                                    class="mx-auto w-full max-w-[200px]">
                            @endif
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {!! $post->body !!}
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $post->author->name }}
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $post->created_at->format('m-d-Y H:i:s') }}
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $post->updated_at->format('m-d-Y H:i:s') }}
                        </td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            <form
                                action="{{ route('admin.posts.destroy', $post->id) }}"
                                method="POST">
                                <ul
                                    class="flex w-full flex-row justify-center space-x-4">
                                    <li><a class="text-info"
                                            href="{{ route('admin.posts.show', $post->id) }}">Show</a>
                                    </li>
                                    <li><a class="text-primary"
                                            href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                    </li>
                                    <li>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-danger">Delete</button>
                                    </li>
                                </ul>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr
                        class="w-full border-b hover:bg-gray-100 dark:border-neutral-300 dark:hover:bg-gray-700">
                        <td colspan="10"
                            class="whitespace-nowrap border-r px-6 py-4 text-center font-medium dark:border-neutral-300">
                            <p
                                class="flex items-center justify-center gap-2 text-lg">
                                <svg fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true" class="h-6 w-6">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z">
                                    </path>
                                </svg>
                                {{ __('No posts') }}
                            </p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4 block">
        {{ $posts->links() }}
    </div>

    @push('scripts')
        <script type="module">
            new PerfectScrollbar('.table-wrap');
        </script>
    @endpush
</x-admin-layout>
