@extends('admin.layout.app')

@section('title', 'Daftar Peminjaman')

@section('heading', 'Daftar Peminjaman')

@section('rightside_button')
    <a href="{{ route('admin_tambah_peminjaman') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Peminjaman</a>
@endsection

@section('main_content')
<div class="section-body">
<div class="col-md-12 col-12 col-sm-12">
    <form action="/admin/daftar-peminjaman/search_peminjaman" class="form-inline" method="GET">
        <input class="form-control" type="search" placeholder="Cari Nama Peminjaman" name="search" data-width="200">
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
                <th>Foto</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Kelas</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data_peminjaman as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                    <a href="#" class="font-weight-600 text-body"><img src="{{ asset('uploads/'.$item->photo) }}" alt="avatar" width="60" class="mr-1"></a>
                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->judul }}</td>
                    <td><a class="btn btn-primary btn-action mr-1">{{ $item->status }}</a></td>
                    <td>
                    {{ $item->kelas }}
                    </td>
                    <td>{{ $item->tanggal_peminjaman }}</td>
                    <td>{{ $item->tanggal_pengembalian }}</td>
                    <td>
                    <a href="{{ route('admin_edit_peminjaman',$item->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="ubah"><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('admin_hapus_peminjaman',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="Hapus" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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
