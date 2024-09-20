@extends('admin.layout.app')

@section('title', 'Tambah Kategori')

@section('heading', 'Tambah Kategori')

@section('rightside_button')
    <a href="{{ route('daftar_kategori') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('tambah_kategori_submit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" name="kategori">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                        <!-- <div class="form-group">
                            <label>Select</label>
                            <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            </select>
                        </div> -->
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
