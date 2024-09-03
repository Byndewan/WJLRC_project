@extends('admin.layout.app')

@section('title', 'Edit Karya')

@section('heading', 'Edit Karya')

@section('rightside_button')
    <a href="{{ route('daftar_karya') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_edit_karya_submit',$row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Foto Sebelumnya</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$row_data->photo) }}"
                                        width="150em" alt="Foto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $row_data->nama }}">
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" name="kelas" value="{{ $row_data->kelas }}">
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $row_data->judul }}">
                                </div>
                                <div class="form-group">
                                    <label>Penulis</label>
                                    <input type="text" class="form-control" name="penulis" value="{{ $row_data->penulis }}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="datetime-local" class="form-control" value="" name="tanggal" value="{{ $row_data->tanggal }}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi">{{ $row_data->deskripsi }}</textarea>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
