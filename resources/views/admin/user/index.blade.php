@extends('layout.app')

@section('title', 'Page Profile')

@section('content')
    <div class="col-lg-12">
        <a href="{{ route('user.create') }}" class="btn {{ $users ? 'hidden' : 'btn-outline-success' }}" id="add_btn" {{ $users ? 'aria-disabled="true"' : '' }}><i class="ti-plus"></i></a>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Profile</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Hobi</th>
                                <th>Foto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->nama_lengkap }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->alamat }}</td>
                                    <td>{{ $user->ttl }}</td>
                                    <td>{{ $user->hobi }}</td>
                                    <td><img src="{{ asset('storage/image/' . $user->gambar) }}" style="width: 100px; height: auto;" class="img-thumbnail rounded-circle"></td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-secondary"><i
                                                class="ti-pencil-alt"></i></a>
                                        <form action="{{ route('user.destroy', $user->id) }}"
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
