@extends('admin.layout.app')

@section('title', 'Edit Mading')

@section('heading', 'Edit Mading')

@section('rightside_button')
    <a href="{{ route('daftar_mading') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_edit_mading_submit',$row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" class="form-control" name="photo" value="{{ $row_data->photo }}">
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $row_data->judul }}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="datetime-local" class="form-control" name="tanggal" value="{{ $row_data->tanggal }}">
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
