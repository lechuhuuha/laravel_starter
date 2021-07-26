@extends('layout')

@section('contents')
    <div class="row mt-5">
        <div class="col-6">
            <a href="{{ route('admin.users.create') }}" class="btn btn-success">create</a>
        </div>
        <div class="col-6"></div>
    </div>
    @if (!empty($users))
        <h1>Quan ly user</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">address</th>
                    <th scope="col">Invoices</th>
                    <th scope="col">gender</th>
                    <th scope="col">role</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $item)

                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td> <a href="{{ route('admin.users.show', $item->id) }}"> {{ $item->name }}</a></td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->invoices->count() }}</td>
                        <td>{{ $item->gender == config('common.user.gender.male') ? 'Nam' : 'Nu' }}</td>
                        <td>{{ $item->role == config('common.user.role.user') ? 'Nguoi dung' : 'Admin' }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.users.edit', $item->id) }}">Update</a>

                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#exampleModal_{{ $item->id }}"
                                class="btn btn-danger">Delete</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal_{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Xac nhan xoa ban ghi nay
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-bs-dismiss="modal">Huy</button>
                                            <form action="{{ route('admin.users.delete', $item->id) }}" method="post">
                                                <button type="submit" class="btn btn-danger">Xoa</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $users->links() }}

    @else
        <h1>ko co du lieu</h1>

    @endif


@endsection
