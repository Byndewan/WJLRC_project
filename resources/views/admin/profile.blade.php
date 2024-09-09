@extends('admin.layout.app')

@section('title', 'Admin - Profile')

@section('main_content')
    <div class="section-body">
            <div class="row mt-sm-auto">

                @foreach ($profile_data as $item)
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('uploads/'.$item->photo) }}" class="rounded-circle profile-widget-picture">
                            </div>
                            {{-- <div style="margin-left: 11em">
                                <a href="{{ route('admin_edit_mading',$item->id) }}" class="btn btn-primary btn-action" title="ubah" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('admin_hapus_mading',$item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="hapus" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                            </div> --}}
                            <div class="profile-widget-description">
                            <div class="profile-widget-name">{{ $item->name }}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div>{{ $item->profesi }}</div></div>
                            {{ $item->deskripsi }}
                            </div>
                        </div>
                        </div>
                        @endforeach
            </div>
    </div>
@endsection
