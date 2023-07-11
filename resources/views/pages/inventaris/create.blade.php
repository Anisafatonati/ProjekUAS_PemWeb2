@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventaris</h1>
        <div class="d-flex justify-content-between mb-3">
            
            <a href="/inventaris" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/inventaris/simpan-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang:</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kode">Kode:</label>
                        <input type="text" name="kode" id="kode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kondisi_barang">Kondisi Barang:</label>
                        <input type="text" name="kondisi_barang" id="kondisi_barang" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

        

        

        

        

