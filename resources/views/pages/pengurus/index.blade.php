@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pengurus</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/pengurus/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pengurus</th>
                                <th>Kode Pengurus</th>
                                <th>ID Jabatan</th>
                                <th>Kontak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengurusData as $pengurus)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pengurus->nama_pengurus }}</td>
                                    <td>{{ $pengurus->kode_pengurus }}</td>
                                    <td>{{ $pengurus->jabatan_id }}</td>
                                    <td>{{ $pengurus->kontak }}</td>
                                    <td>
                                            <a href="/pengurus/show/{{ $pengurus->id }}" class="btn btn-primary">View</a>
                                            <a href="/pengurus/edit/{{ $pengurus->id }}" class="btn btn-warning">Edit</a>
                                            <a href="/pengurus/delete/{{ $pengurus->id }}" class="btn btn-danger">Delete</a>
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