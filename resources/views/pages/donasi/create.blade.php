@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Donasi</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/donasi" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/donasi/simpan-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Tanggal </label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nominal </label>
                        <input type="text" class="form-control" name="nominal" pattern="^\d+(\.\d{1,2})?$" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Donatur </label>
                        <input type="text" class="form-control" name="nama_donatur" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection