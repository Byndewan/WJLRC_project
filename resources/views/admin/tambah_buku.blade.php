@extends('admin.layout.app')

@section('title', 'Tambah buku')

@section('heading', 'Tambah buku')

@section('rightside_button')
    <a href="{{ route('admin_daftar_buku') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_tambah_buku_submit') }}">
                        @csrf
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                            <option>Di Pinjam</option>
                            <option>Di Kembalikan</option>
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
