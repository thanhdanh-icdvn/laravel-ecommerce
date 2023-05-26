<x-admin-layout>
    <x-slot name="title">{{ __('Danh sách bài viết') }}</x-slot>
    <div class="content__head">
        <div class="flex flex-wrap items-center justify-between transition-all duration-300">
            <h2 class="inline-block mt-0 mb-2 text-4xl font-medium leading-tight text-primary">Post list</h2>
            <div class="block">
                <a href="{{ route('posts.create') }}" role="button"
                    class="px-4 py-2 ml-auto font-bold text-white bg-blue-500 rounded-full inline-bock hover:bg-blue-700">Add
                    new post</a>
            </div>
        </div>
        <div class="block w-full mx-auto mt-4 text-center lg:w-1/2">
            <x-input-search />
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="flex flex-col w-full overflow-x-auto">
        <table class="min-w-full text-sm font-light border dark:border-neutral-300">
            <thead class="font-medium border-b dark:border-neutral-300 bg-slate-200">
                <tr class="">
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">No</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Title</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Description</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Slug</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Body</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Author</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Created At</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Updated At</th>
                    <th scope="col" class="px-6 py-4 border-r dark:border-neutral-300">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-b dark:border-neutral-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td
                            class="px-6 py-4 font-medium text-center border-r whitespace-nowrap dark:border-neutral-300">
                            {{ ++$i }}</td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            {{ $post->title }}
                        </td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            {{ $post->description }}</td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            {{ $post->slug }}</td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            {!! $post->body !!}
                        </td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            {{ $post->user_id }}</td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            {{ $post->created_at->format('m-d-Y H:i:s') }}</td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            {{ $post->updated_at->format('m-d-Y H:i:s') }}</td>
                        <td class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-300">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                <ul class="flex flex-row justify-center w-full space-x-4">
                                    <li><a class="text-info" href="{{ route('posts.show', $post->id) }}">Show</a></li>
                                    <li><a class="text-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                    </li>
                                    <li>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger">Delete</button>
                                    </li>
                                </ul>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="block mt-4">
        {{ $posts->links() }}
    </div>
</x-admin-layout>