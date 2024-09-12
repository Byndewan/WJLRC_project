@extends('admin.layout.app')

@section('title', 'Edit Tim')

@section('heading', 'Edit Tim')

@section('rightside_button')
    <a href="{{ route('admin_daftar_tim') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Lihat Semua</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_edit_tim_submit',$row_data->id) }}" method="post" enctype="multipart/form-data">
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
                                    <label>Profesi</label>
                                    <input type="text" class="form-control" name="profesi" value="{{ $row_data->profesi }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 1</label>
                                    <input type="text" class="form-control" name="icon1" value="{{ $row_data->icon1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 1</label>
                                    <input type="text" class="form-control" name="icon_url1" value="{{ $row_data->icon1_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 2</label>
                                    <input type="text" class="form-control" name="icon2" value="{{ $row_data->icon2 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 2</label>
                                    <input type="text" class="form-control" name="icon_url2" value="{{ $row_data->icon2_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 3</label>
                                    <input type="text" class="form-control" name="icon3" value="{{ $row_data->icon3 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 3</label>
                                    <input type="text" class="form-control" name="icon_url3" value="{{ $row_data->icon3_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 4</label>
                                    <input type="text" class="form-control" name="icon4" value="{{ $row_data->icon4 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 4</label>
                                    <input type="text" class="form-control" name="icon_url4" value="{{ $row_data->icon4_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 5</label>
                                    <input type="text" class="form-control" name="icon5" value="{{ $row_data->icon5 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon URL 5</label>
                                    <input type="text" class="form-control" name="icon_url5" value="{{ $row_data->icon5_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                    <option value="Show" @if($row_data->status == 'Show' ) selected @endif >Show</option>
                                    <option value="Hide" @if($row_data->status == 'Hide' ) selected @endif >Hide</option>
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
