@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventaris</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/inventaris/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Kode</th>
                                <th>Jumlah</th>
                                <th>Kondisi Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventarisData as $inventaris)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $inventaris->nama_barang }}</td>
                                    <td>{{ $inventaris->kode}}</td>
                                    <td>{{ $inventaris->jumlah}}</td>
                                    <td>{{ $inventaris->kondisi_barang}}</td>
                                    <td>
                                        <a href="/inventaris/edit/{{ $inventaris->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/inventaris/delete/{{ $inventaris->id }}" class="btn btn-danger">Delete</a>
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