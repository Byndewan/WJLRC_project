@extends('admin.layout.app')

@section('title', 'Daftar Liputan')

@section('heading', 'Daftar Liputan')

@section('rightside_button')
    <a href="{{ route('admin_tambah_liputan') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Liputan</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="col-md-12 col-12 col-sm-12">
        <form action="/admin/daftar-liputan/search" class="form-inline" method="GET">
            <input class="form-control" type="search" placeholder="Cari Nama Liputan" name="search" data-width="200">
            <div class="input-group-append">
            <button class="btn" data-height="42" type="submit"><i class="fas fa-search"></i>Cari</button>
          </div>
        </form>
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Judul Liputan</th>
                                <th>nama</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_liputan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="#" class="font-weight-600 text-body"><img src="{{ asset('uploads/'.$item->photo) }}" alt="avatar" width="140"></a>
                                    </td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        <a href="{{ route('admin_edit_liputan',$item->id) }}" class="btn btn-primary btn-action mr-1" title="ubah" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('admin_hapus_liputan',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="hapus" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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
