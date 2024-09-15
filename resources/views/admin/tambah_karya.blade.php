@extends('admin.layout.app')

@section('title', 'Tambah Karya')

@section('heading', 'Tambah Karya')

@section('rightside_button')
    <a href="{{ route('daftar_karya') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_tambah_karya_submit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis">
                        </div>
                        <!-- <div class="form-group">
                            <label>Select</label>
                            <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" value="" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi"></textarea>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
