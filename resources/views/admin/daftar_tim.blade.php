@extends('admin.layout.app')

@section('title', 'Daftar Tim')

@section('heading', 'Daftar Tim')

@section('rightside_button')
    <a href="{{ route('admin_tambah_tim') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Tim</a>
@endsection

@section('main_content')
<div class="section-body">
<div class="col-md-12 col-12 col-sm-12">
    <form action="/admin/daftar-tim/search" class="form-inline" method="GET">
        <input class="form-control" type="search" placeholder="Cari Nama Tim" name="search" data-width="200">
        <div class="input-group-append">
        <button class="btn" data-height="42" type="submit"><i class="fas fa-search"></i>Cari</button>
      </div>
    </form>
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0 table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto & Nama</th>
                        <th>Profesi</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                        <tbody>
                            @foreach ($data_tim as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="#" class="font-weight-600 text-body"><img src="{{ asset('uploads/'.$item->photo) }}" alt="avatar" width="60" class="rounded-circle mr-2"> {{ $item->nama }}</a>
                                </td>
                                <td>{{ $item->profesi }}</td>
                                <td>
                                        <a href="{{ route('admin_edit_tim',$item->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="ubah"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('admin_hapus_tim',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="ubah" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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
