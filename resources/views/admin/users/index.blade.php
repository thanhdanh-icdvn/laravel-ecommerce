<x-admin-layout>
    <x-slot name="title">{{ __('Danh sách người dùng') }}</x-slot>

    <div class="content__head">
        <div
            class="flex flex-wrap items-center justify-between transition-all duration-300">
            <h2
                class="text-primary mt-0 mb-2 inline-block text-4xl font-medium leading-tight">
                User list</h2>
            <div class="block">
                <a href="{{ route('admin.users.create') }}" role="button"
                    class="inline-bock ml-auto rounded-full bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Add
                    new User</a>
            </div>
        </div>
        <div class="mx-auto mt-4 block w-full text-center lg:w-1/2">
            <x-input-search />
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-wrap relative flex w-full flex-col pb-4">
        <table
            class="min-w-full border text-sm font-light dark:border-neutral-300">
            <thead
                class="border-b bg-slate-200 font-medium dark:border-neutral-300">
                <tr>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">No
                    </th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">Name
                    </th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">Email
                    </th>
                    <th scope="col"
                        class="border-r px-6 py-4 dark:border-neutral-300">Posts
                    </th>
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
                @foreach ($users as $user)
                    <tr class="border-b dark:border-neutral-300">
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 text-center font-medium dark:border-neutral-300">
                            {{ ++$i }}</td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $user->name }}</td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $user->email }}</td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 text-right font-medium dark:border-neutral-300">
                            {{ $user->posts->count() }}</td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $user->created_at->format('m-d-Y H:i:s') }}</td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            {{ $user->updated_at->format('m-d-Y H:i:s') }}</td>
                        <td
                            class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-300">
                            <form
                                action="{{ route('admin.users.destroy', $user->id) }}"
                                method="POST">
                                <ul
                                    class="flex w-full flex-row justify-center space-x-4">
                                    <li><a class="text-info"
                                            href="{{ route('admin.users.show', $user->id) }}">Show</a>
                                    </li>
                                    <li><a class="text-primary"
                                            href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
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
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4 block">
        {{ $users->links() }}
    </div>

    @push('scripts')
        <script type="module">
            new PerfectScrollbar('.table-wrap');
        </script>
    @endpush
</x-admin-layout>
