@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventaris</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/inventaris" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/inventaris/update/{{ $inventarisData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" value="{{$inventarisData->nama_barang}}" class="form-control" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kode</label>
                        <input type="text" value="{{$inventarisData->kode}}" class="form-control" name="kode" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="text" value="{{$inventarisData->jumlah}}" class="form-control" name="jumlah" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kondisi Barang</label>
                        <input type="text" value="{{$inventarisData->kondisi_barang}}" class="form-control" name="kondisi_barang" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection