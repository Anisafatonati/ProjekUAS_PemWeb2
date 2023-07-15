@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Jabatan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/jabatan" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/jabatan/show/{{ $jabatanData->id }}" method="GET">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Jabatan</label>
                        <input type="text" value="{{$jabatanData->nama_jabatan}}" class="form-control" name="nama_jabatan" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
