@extends('admin.layout.app')

@section('title', 'Tambah Tim')

@section('heading', 'Tambah Tim')

@section('rightside_button')
    <a href="{{ route('admin_daftar_tim') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_tambah_tim_submit') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Profesi</label>
                        <input type="text" class="form-control" name="profesi">
                    </div>
                    <div class="form-group">
                        <label>Icon 1</label>
                        <input type="text" class="form-control" name="icon1">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon1_url">
                    </div>
                    <div class="form-group">
                        <label>Icon 2</label>
                        <input type="text" class="form-control" name="icon2">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon2_url">
                    </div>
                    <div class="form-group">
                        <label>Icon 3</label>
                        <input type="text" class="form-control" name="icon3">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon3_url">
                    </div>
                    <div class="form-group">
                        <label>Icon 4</label>
                        <input type="text" class="form-control" name="icon4">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon4_url">
                    </div>
                    <div class="form-group">
                        <label>Icon 5</label>
                        <input type="text" class="form-control" name="icon5">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon5_url">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <option>Show</option>
                        <option>Hide</option>
                        </select>
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
