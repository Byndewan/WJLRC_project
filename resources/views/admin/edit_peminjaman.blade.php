@extends('admin.layout.app')

@section('title', 'Edit Peminjaman')

@section('heading', 'Edit Peminjaman')

@section('rightside_button')
    <a href="{{ route('admin_daftar_peminjaman') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_edit_peminjaman_submit',$row_data->id) }}" method="post" enctype="multipart/form-data">
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
                                    <label>File</label>
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
                                    <label>Judul Buku Yang Dipinjam</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $row_data->judul }}">
                                    </div>
                                    <div class="form-group">
                                    <label>Tanggal Peminjaman</label>
                                    <input type="datetime-local" class="form-control" name="tanggal_peminjaman" value="{{ $row_data->tanggal_peminjaman }}">
                                    </div>
                                    <div class="form-group">
                                    <label>Tanggal Pengembalian</label>
                                    <input type="datetime-local" class="form-control" name="tanggal_pengembalian" value="{{ $row_data->tanggal_pengembalian }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                        <option>Di Pinjam</option>
                                        <option>Di Kembalikan</option>
                                        </select>
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
