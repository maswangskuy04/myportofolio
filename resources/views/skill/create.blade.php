@extends('layout.app')

@section('title', 'Page Tambah Data Skill')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('skill.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Keahlian</label>
                            <input type="text" class="form-control" name="keahlian" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" required>
                        </div>
                        <button type="submit" class="btn btn-dark float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
