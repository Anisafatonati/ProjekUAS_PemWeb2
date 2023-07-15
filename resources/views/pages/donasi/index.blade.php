@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Donasi</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/donasi/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Nominal</th>
                                <th>Nama Donatur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donasis as $donasi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $donasi->tanggal }}</td>
                                    <td>{{ $donasi->nominal}}</td>
                                    <td>{{ $donasi->nama_donatur}}</td>
                                    <td>
                                        <a href="/donasi/show/{{ $donasi->id }}" class="btn btn-primary">View</a>
                                        <a href="/donasi/edit/{{ $donasi->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/donasi/delete/{{ $donasi->id }}" class="btn btn-danger">Delete</a>
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