@extends('layout.app')

@section('title', 'Tambah Data Education')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('education.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" class="form-control" name="nama_sekolah" required>
                            </div>
                            <div class="form-group">
                                <label>Jenjang Pendidikan</label>
                                <input type="text" class="form-control" name="jp" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tanggal_masuk" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input type="date" class="form-control" name="tanggal_keluar" required>
                            </div>
                            <button type="submit" class="btn btn-dark float-right">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
