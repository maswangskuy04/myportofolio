@extends('layout.app')

@section('title', 'Page Skill')

@section('content')
<div class="col-lg-12">
    <a href="{{ route('skill.create') }}" class="btn btn-outline-success"><i class="ti-plus"></i></a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keahlian</th>
                            <th>Deskripsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $key => $skill)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $skill->keahlian }}</td>
                                <td>{{ $skill->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-outline-secondary"><i
                                            class="ti-pencil-alt"></i></a>
                                    <form action="{{ route('skill.destroy', $skill->id) }}"
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
