@extends('admin.layout.app')

@section('title', 'Edit Organigram')

@section('heading', 'Edit Organigram')

@section('rightside_button')
    <a href="{{ route('daftar_organigram') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_edit_organigram_submit',$row_data->id) }}" method="post" enctype="multipart/form-data">
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
                                    <label>Icon 1</label>
                                    <input type="text" class="form-control" name="icon1" value="{{ $row_data->icon1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 1</label>
                                    <input type="text" class="form-control" name="icon_url1" value="{{ $row_data->icon_url1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 2</label>
                                    <input type="text" class="form-control" name="icon2" value="{{ $row_data->icon2 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 2</label>
                                    <input type="text" class="form-control" name="icon_url2" value="{{ $row_data->icon_url2 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 3</label>
                                    <input type="text" class="form-control" name="icon3" value="{{ $row_data->icon3 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 3</label>
                                    <input type="text" class="form-control" name="icon_url3" value="{{ $row_data->icon_url3 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 4</label>
                                    <input type="text" class="form-control" name="icon4" value="{{ $row_data->icon4 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 4</label>
                                    <input type="text" class="form-control" name="icon_url4" value="{{ $row_data->icon_url4 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 5</label>
                                    <input type="text" class="form-control" name="icon5" value="{{ $row_data->icon5 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 5</label>
                                    <input type="text" class="form-control" name="icon_url5" value="{{ $row_data->icon_url5 }}">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <select class="form-control" name="jabatan">
                                    <option value="{{ $row_data->jabatan }}" >Pembina</option>
                                    <option value="{{ $row_data->jabatan }}" >Ketua</option>
                                    <option value="{{ $row_data->jabatan }}" >Wakil Ketua 1</option>
                                    <option value="{{ $row_data->jabatan }}" >Wakil Ketua 2</option>
                                    <option value="{{ $row_data->jabatan }}" >Bendahara 1</option>
                                    <option value="{{ $row_data->jabatan }}" >Bendahara 2</option>
                                    <option value="{{ $row_data->jabatan }}" >Sekretaris 1</option>
                                    <option value="{{ $row_data->jabatan }}" >Sekretaris 2</option>
                                    <option value="{{ $row_data->jabatan }}" >K. Area Literasi 1</option>
                                    <option value="{{ $row_data->jabatan }}" >K. Area Literasi 2</option>
                                    <option value="{{ $row_data->jabatan }}" >K. Mading 1</option>
                                    <option value="{{ $row_data->jabatan }}" >K. Mading 2</option>
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
