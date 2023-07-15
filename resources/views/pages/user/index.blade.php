@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">user</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/user/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userData as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/user/show/{{ $user->id }}" class="btn btn-primary">View</a>
                                            <a href="/user/edit/{{ $user->id }}" class="btn btn-warning">Edit</a>
                                            <a href="/user/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
