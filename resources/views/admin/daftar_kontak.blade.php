@extends('admin.layout.app')

@section('title', 'Daftar Kontak')

@section('heading', 'Daftar Kontak')

@section('rightside_button')
    <a href="{{ route('admin_tambah_kontak') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kontak</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="col-md-12 col-12 col-sm-12">
        <div class="card">
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data_kontak as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->notlp }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="{{ route('admin_edit_kontak',$item->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="ubah"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('admin_hapus_kontak',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" onClick="return confirm('Are you sure?');"><i class="fas fa-trash" title="hapus"></i></a>
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
