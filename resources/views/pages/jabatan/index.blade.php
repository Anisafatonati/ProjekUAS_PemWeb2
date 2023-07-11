@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Jabatan</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Jabatan</li>
            </ol>
            <a href="/jabatan/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jabatanData as $jabatan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jabatan->nama_jabatan }}</td>
                                    <td>
                                        <a href="/jabatan/edit/{{ $jabatan->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/jabatan/delete/{{ $jabatan->id }}" class="btn btn-danger">Delete</a>
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