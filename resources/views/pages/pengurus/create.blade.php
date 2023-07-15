@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kegiatan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/pengurus" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/pengurus/simpan-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Pengurus</label>
                        <input type="text" class="form-control" name="nama_pengurus" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kode Pengurus</label>
                        <input type="text" class="form-control" name="kode_pengurus" required>
                    </div>
                    <div class="form-group">
                        <label for="">ID Jabatan</label>
                        <select name="jabatan_id" id="jabatan_id" class="form-control">
                            @foreach ($jabatanData as $pengurus)
                            <option value="{{$pengurus->id}}" {{$pengurus->id == $pengurusData->jabatan_id ? 'selected' : ''}}>
                                {{$pengurus->nama_jabatan}}
                            </option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kontak</label>
                        <input type="string" class="form-control" name="kontak" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection