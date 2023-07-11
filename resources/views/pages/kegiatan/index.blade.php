@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">kegiatan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/kegiatan/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>ID Pengurus</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatanData as $kegiatan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kegiatan->nama_kegiatan }}</td>
                                    <td>{{ $kegiatan->tanggal }}</td>
                                    <td>{{ $kegiatan->pengurus_id }}</td>
                                    <td>
                                        <a href="/kegiatan/edit/{{ $kegiatan->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/kegiatan/delete/{{ $kegiatan->id }}" class="btn btn-danger">Delete</a>
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