@extends('layout.app')

@section('title', 'Page Edit Profile')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="basic-form" id="form-user">
                    <form action="{{ route('user.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Profile</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $edit->nama_lengkap }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $edit->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $edit->alamat }}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="ttl" value="{{ $edit->ttl }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Hobi</label>
                            <input type="text" class="form-control" name="hobi" value="{{ $edit->hobi }}" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                            <img src="{{ asset('storage/image/' . $edit->gambar) }}" alt="">
                        </div>
                        <button type="submit" class="btn btn-dark float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
