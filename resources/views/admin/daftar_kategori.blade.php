@extends('admin.layout.app')

@section('title', 'Kategori')

@section('heading', 'Kategori')

@section('rightside_button')
    <a href="{{ route('tambah_kategori') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kategori</a>
@endsection

@section('main_content')
<div class="section-body">
<div class="col-md-12 col-12 col-sm-12">
    <form action="/admin/daftar-kategori/search_kategori" class="form-inline" method="GET">
        <input class="form-control" type="search" placeholder="Cari Nama Kategori" name="search" data-width="200">
        <div class="input-group-append">
        <button class="btn" data-height="42" type="submit"><i class="fas fa-search"></i>Cari</button>
      </div>
    </form>
    <div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
        <table class="table table-bordered table-striped mb-0">
            <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data_kategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                    {{ $item->keterangan }}
                    </td>
                    <td>
                    <a href="{{ route('edit_kategori',$item->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="ubah"><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('hapus_kategori',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="Hapus" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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
