@extends('admin.layout.app')

@section('title', 'Tambah Organigram')

@section('heading', 'Tambah Organigram')

@section('rightside_button')
    <a href="{{ route('daftar_organigram') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_tambah_organigram_submit') }}" enctype="multipart/form-data">
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
                        <label>Icon 1</label>
                        <input type="text" class="form-control" name="icon1">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon_url1">
                    </div>
                    <div class="form-group">
                        <label>Icon 2</label>
                        <input type="text" class="form-control" name="icon2">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon_url2">
                    </div>
                    <div class="form-group">
                        <label>Icon 3</label>
                        <input type="text" class="form-control" name="icon3">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon_url3">
                    </div>
                    <div class="form-group">
                        <label>Icon 4</label>
                        <input type="text" class="form-control" name="icon4">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon_url4">
                    </div>
                    <div class="form-group">
                        <label>Icon 5</label>
                        <input type="text" class="form-control" name="icon5">
                    </div>
                    <div class="form-group">
                        <label>Icon URL</label>
                        <input type="text" class="form-control" name="icon_url5">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control" name="jabatan">
                        <option>Pembina</option>
                        <option>Ketua</option>
                        <option>Wakil Ketua 1</option>
                        <option>Wakil Ketua 2</option>
                        <option>Bendahara 1</option>
                        <option>Bendahara 2</option>
                        <option>Sekretaris 1</option>
                        <option>Sekretaris 2</option>
                        <option>K. Area Literasi 1</option>
                        <option>K. Area Literasi 2</option>
                        <option>K. Mading 1</option>
                        <option>K. Mading 2</option>
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
