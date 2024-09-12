@extends('admin.layout.app')

@section('title', 'Daftar Buku')

@section('heading', 'Daftar Buku')

@section('rightside_button')
    <a href="{{ route('admin_tambah_buku') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Buku</a>
@endsection

@section('main_content')
<div class="section-body">
    @include('admin.layout.search')
    <div class="col-md-12 col-12 col-sm-12">
        <div class="card">
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($buku_data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                    <a class="btn btn-primary btn-action mr-1">{{ $item->status }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin_edit_buku',$item->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="ubah"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('admin_hapus_buku',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" onClick="return confirm('Are you sure?');"><i class="fas fa-trash" title="hapus"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
