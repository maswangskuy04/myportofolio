@extends('layout.app')

@section('title', 'Page Education')

@section('content')
    <div class="col-lg-12">
        <a href="{{ route('education.create') }}" class="btn btn-outline-success"><i class="ti-plus"></i> Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sekolah</th>
                                <th>Jenjang Pendidikan</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Keluar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($educations as $key => $education)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $education->nama_sekolah }}</td>
                                    <td>{{ $education->jp }}</td>
                                    <td>{{ $education->tanggal_masuk }}</td>
                                    <td>{{ $education->tanggal_keluar }}</td>
                                    <td>
                                        <a href="{{ route('education.edit', $education->id) }}" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                                        <form action="{{ route('education.destroy', $education->id) }}"
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
