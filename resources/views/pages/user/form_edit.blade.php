@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="/user" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/user/update/{{ $userData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" value="{{$userData->first_name}}" class="form-control" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" value="{{$userData->last_name}}" class="form-control" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="{{$userData->email}}" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" value="{{$userData->password}}" class="form-control" name="password" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection