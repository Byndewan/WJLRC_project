@extends('admin.layout.app')

@section('title', 'Area Tim')

@section('heading', 'Area Tim')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin_area_tim',$tim_data->id) }}">
                        @csrf
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                            <option value="Show" @if($tim_data->status == 'Show') selected @endif >Show</option>
                            <option value="Hide" @if($tim_data->status == 'Hide') selected @endif >Hide</option>
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
