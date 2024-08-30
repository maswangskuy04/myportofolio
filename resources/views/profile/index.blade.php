@extends('layout.app')

@section('content')
    <a href="{{ route('profile.create') }}" class="btn btn-outline-primary btn-sm mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table text-center">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama Profile</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th style="width: 20%">Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $key => $profile)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $profile->nama_profile }}</td>
                    <td>{{ $profile->alamat }}</td>
                    <td>{{ $profile->email }}</td>
                    <td><img src="{{ asset('storage/image/' . $profile->gambar) }}" width="50%"></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
