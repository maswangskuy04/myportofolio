@extends('layout.app')

@section('title', 'Page Profile')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Profile</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th class="col-2">Foto</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles as $key => $profile)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $profile->nama_profile }}</td>
                                    <td>{{ $profile->alamat }}</td>
                                    <td>{{ $profile->email }}</td>
                                    <td><img src="{{ asset('storage/image/' . $profile->gambar) }}" width="30%"></td>
                                    <td>
                                        <a href="" class="btn btn-outline-secondary"><i
                                                class="ti-pencil-alt"></i></a>
                                        <form action="{{ route('user.destroy', $profile->id) }}"
                                            onsubmit="return confirm('Akan di delete ?');" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"><i
                                                    class="ti-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
@endsection
