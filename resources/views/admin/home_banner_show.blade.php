@extends('admin.layout.app')

@section('title', 'Home Banner')

@section('heading', 'Edit Home Banner')


@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_home_banner_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title *</label>
                                    <input type="text" class="form-control" name="banner_title" value="{{ $data_page->banner_title }}">
                                </div>
                                <div class="form-group">
                                    <label>Subtitle *</label>
                                    <input type="text" class="form-control" name="banner_subtitle" value="{{ $data_page->banner_subtitle }}">
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
