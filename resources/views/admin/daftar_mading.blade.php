@extends('admin.layout.app')

@section('title', 'Daftar Mading')

@section('heading', 'Daftar Mading')

@section('rightside_button')
    <a href="{{ route('admin_tambah_mading') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Mading</a>
@endsection

@section('main_content')
<div class="section-body">
    @include('admin.layout.search')
    <div class="col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Mading</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($mading_data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                        <a href="{{ route('admin_edit_mading',$item->id) }}" class="btn btn-primary btn-action mr-1" title="ubah" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('admin_hapus_mading',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="hapus" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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
