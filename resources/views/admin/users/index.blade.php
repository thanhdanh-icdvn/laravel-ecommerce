@extends('admin.users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example</h2>
            </div>
            <div class="pull-right">
                <a class="text-success" href="{{ route('users.create') }}"> Create New user</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table-auto">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <ul class="flex flex-row w-full">
                                <li><a class="text-info" href="{{ route('users.show', $user->id) }}">Show</a></li>
                                <li><a class="text-primary" href="{{ route('users.edit', $user->id) }}">Edit</a></li>
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
@endsection
