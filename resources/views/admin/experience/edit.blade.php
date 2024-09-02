@extends('layout.app')

@section('title', 'Page Edit Data Experience')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('experience.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="text" class="form-control" name="company_name" value="{{ $edit->company_name }}"equired>
                        </div>
                        <div class="form-group">
                            <label>Posisi</label>
                            <input type="text" class="form-control" name="position" value="{{ $edit->position }}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tanggal_masuk" value="{{ $edit->tanggal_masuk }}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Keluar</label>
                            <input type="date" class="form-control" name="tanggal_keluar" value="{{ $edit->tanggal_keluar }}" required>
                        </div>
                        <button type="submit" class="btn btn-dark float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
