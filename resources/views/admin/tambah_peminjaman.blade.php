@extends('admin.layout.app')

@section('title', 'Tambah Peminjaman')

@section('heading', 'Tambah Peminjaman')

@section('rightside_button')
    <a href="{{ route('admin_daftar_peminjaman') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_tambah_peminjaman_submit') }}" enctype="multipart/form-data">
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
                        <label>Kelas</label>
                        <input type="text" class="form-control" name="kelas">
                        </div>
                        <div class="form-group">
                        <label>Judul Buku Yang Dipinjam</label>
                        <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input type="datetime-local" class="form-control" name="tanggal_peminjaman">
                        </div>
                        <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="datetime-local" class="form-control" name="tanggal_pengembalian">
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
