@extends('admin.layout.app')

@section('title', 'Status Tim')

@section('heading', 'Edit Status Tim')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_status_tim_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                    <option value="Show" @if($data_page->status == 'Show' ) selected @endif >Show</option>
                                    <option value="Hide" @if($data_page->status == 'Hide' ) selected @endif >Hide</option>
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
