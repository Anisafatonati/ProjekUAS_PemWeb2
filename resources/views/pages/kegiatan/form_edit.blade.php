@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kegiatan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/kegiatan" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/kegiatan/update/{{ $kegiatanData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kegiatan</label>
                        <input type="text" value="{{$kegiatanData->nama_kegiatan}}" class="form-control" name="nama_kegiatan" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" value="{{$kegiatanData->tanggal}}" class="form-control" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="">ID Pengurus</label>
                        <input type="number" value="{{$kegiatanData->pengurus_id}}" class="form-control" name="pengurus_id" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection