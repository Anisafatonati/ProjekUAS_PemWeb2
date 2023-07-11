@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kegiatan</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Data Merk</li>
            </ol>
            <a href="/kegiatan" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/kegiatan/simpan-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kegiatan</label>
                        <input type="text" class="form-control" name="nama_kegiatan" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pengurus ID</label>
                        <input type="number" class="form-control" name="pengurus_id" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection