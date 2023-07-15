@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kegiatan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/kegiatan" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/kegiatan/show/{{ $kegiatanData->id }}" method="GET">
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
                        <select name="pengurus_id" id="pengurus_id" class="form-control">
                            @foreach ($pengurusData as $pengurus)
                            <option value="{{$pengurus->id}}" {{$pengurus->id == $kegiatanData->pengurus_id }}>
                                {{$pengurus->nama_pengurus}}
                            </option>
                            @endforeach
                        </select>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
