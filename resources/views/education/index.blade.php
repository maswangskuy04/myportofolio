@extends('layout.app')

@section('title', 'Page Education')

@section('content')
    <div class="col-lg-12">
        <a href="{{ route('education.create') }}" class="btn btn-outline-success"><i class="ti-plus"></i></a>
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
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($educations as $key => $education)
                                <tr>
                                    <th>{{ $key + 1 }}</th>
                                    <td>{{ $education->company_name }}</td>
                                    <td>{{ $education->tanggal_masuk }}</td>
                                    <td>{{ $education->tanggal_keluar }}</td>
                                    <td>{{ $education->position }}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                                        <form action="{{ route('profile.destroy', $education->id) }}"
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
