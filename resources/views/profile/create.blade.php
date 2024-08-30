@extends('layout.app')

@section('content')
    <div class="container col-sm-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Profile</label>
                        <input type="text" name="nama_profile" id="nama_profile" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-sm btn-outline-success float-end" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
