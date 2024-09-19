@extends('admin.layout.app')

@section('title', 'Home Footer')

@section('heading', 'Edit Home Footer')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_home_footer_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Footer Title *</label>
                                    <input type="text" class="form-control" name="footer_title" value="{{ $data_page->footer_title }}">
                                </div>
                                <div class="form-group">
                                    <label>Footer Subtitle *</label>
                                    <input type="text" class="form-control" name="footer_subtitle" value="{{ $data_page->footer_subtitle }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 1</label>
                                    <input type="text" class="form-control" name="icon_1" value="{{ $data_page->icon_1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 1 URL</label>
                                    <input type="text" class="form-control" name="icon_1_url" value="{{ $data_page->icon_1_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 2</label>
                                    <input type="text" class="form-control" name="icon_2" value="{{ $data_page->icon_2 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 2 URL</label>
                                    <input type="text" class="form-control" name="icon_2_url" value="{{ $data_page->icon_2_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 3</label>
                                    <input type="text" class="form-control" name="icon_3" value="{{ $data_page->icon_3 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 3 URL</label>
                                    <input type="text" class="form-control" name="icon_3_url" value="{{ $data_page->icon_3_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 4</label>
                                    <input type="text" class="form-control" name="icon_4" value="{{ $data_page->icon_4 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 4 URL</label>
                                    <input type="text" class="form-control" name="icon_4_url" value="{{ $data_page->icon_4_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 5</label>
                                    <input type="text" class="form-control" name="icon_5" value="{{ $data_page->icon_5 }}">
                                </div>
                                <div class="form-group">
                                    <label>Icon 5 URL</label>
                                    <input type="text" class="form-control" name="icon_5_url" value="{{ $data_page->icon_5_url }}">
                                </div>
                                <div class="form-group">
                                    <label>Heading 1 *</label>
                                    <input type="text" class="form-control" name="heading_1" value="{{ $data_page->heading_1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Name URL 1</label>
                                    <input type="text" class="form-control" name="name_url_1" value="{{ $data_page->name_url_1 }}">
                                </div>
                                <div class="form-group">
                                    <label>URL 1</label>
                                    <input type="text" class="form-control" name="url_1" value="{{ $data_page->url_1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Name URL 2</label>
                                    <input type="text" class="form-control" name="name_url_2" value="{{ $data_page->name_url_2 }}">
                                </div>
                                <div class="form-group">
                                    <label>URL 2</label>
                                    <input type="text" class="form-control" name="url_2" value="{{ $data_page->url_2 }}">
                                </div>
                                <div class="form-group">
                                    <label>Name URL 3</label>
                                    <input type="text" class="form-control" name="name_url_3" value="{{ $data_page->name_url_3 }}">
                                </div>
                                <div class="form-group">
                                    <label>URL 3</label>
                                    <input type="text" class="form-control" name="url_3" value="{{ $data_page->url_3 }}">
                                </div>
                                <div class="form-group">
                                    <label>Name URL 4</label>
                                    <input type="text" class="form-control" name="name_url_4" value="{{ $data_page->name_url_4 }}">
                                </div>
                                <div class="form-group">
                                    <label>URL 4</label>
                                    <input type="text" class="form-control" name="url_4" value="{{ $data_page->url_4 }}">
                                </div>
                                <div class="form-group">
                                    <label>Name URL 5</label>
                                    <input type="text" class="form-control" name="name_url_5" value="{{ $data_page->name_url_5 }}">
                                </div>
                                <div class="form-group">
                                    <label>URL 5</label>
                                    <input type="text" class="form-control" name="url_5" value="{{ $data_page->url_5 }}">
                                </div>
                                <div class="form-group">
                                    <label>Heading 2 *</label>
                                    <input type="text" class="form-control" name="heading_2" value="{{ $data_page->heading_2 }}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat *</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ $data_page->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label>Country *</label>
                                    <input type="text" class="form-control" name="country" value="{{ $data_page->country }}">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon *</label>
                                    <input type="text" class="form-control" name="no_telepon" value="{{ $data_page->no_telepon }}">
                                </div>
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="text" class="form-control" name="email" value="{{ $data_page->email }}">
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
