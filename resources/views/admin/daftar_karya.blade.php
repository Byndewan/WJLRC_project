@extends('admin.layout.app')

@section('title', 'Daftar Karya')

@section('heading', 'Daftar Karya')

@section('rightside_button')
    <a href="{{ route('admin_tambah_karya') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Karya</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0 table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Photo</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($karya_data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="#" class="font-weight-600 text-body"><img src="{{ asset('uploads/'.$item->photo) }}" alt="avatar" width="120"></a>
                            </td>
                            <td>
                            <a href="#" class="font-weight-600 text-body">
                            {{ $item->nama }}</a>
                            </td>
                            <td>
                            {{ $item->kelas }}
                            </td>
                            <td>{{ $item->judul }}</td>
                            <td>
                            <a href="{{ route('admin_edit_karya',$item->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i> Edit</a>
                            <a href="{{ route('admin_hapus_karya',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i> Delete</a>
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