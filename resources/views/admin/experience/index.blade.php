@extends('layout.app')

@section('title', 'Page Experience')

@section('content')
    <div class="col-lg-12">
        <a href="{{ route('experience.create') }}" class="btn btn-outline-success"><i class="ti-plus"></i> Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Posisi</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Keluar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($experiences as $key => $experience)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $experience->company_name }}</td>
                                    <td>{{ $experience->position }}</td>
                                    <td>{{ $experience->tanggal_masuk }}</td>
                                    <td>{{ $experience->tanggal_keluar }}</td>
                                    <td>
                                        <a href="{{ route('experience.edit', $experience->id) }}" class="btn btn-outline-secondary"><i
                                                class="ti-pencil-alt"></i></a>
                                        <form action="{{ route('experience.destroy', $experience->id) }}"
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
