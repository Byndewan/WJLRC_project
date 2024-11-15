@extends('detail_halaman.layout.app')

@section('title', 'Detail - resensi')

@section('main_content')
            <div class="single-post" style="margin-bottom: 50px;">
              <div class="post-meta"><span>{{ $data_resensi->tanggal }}</span></div>
              <h1 class="mb-5">{{ $data_resensi->judul }}</h1>
              <p class="post-meta" style="margin-bottom : 20px; font-size: 15px;">{{ $data_resensi->nama }}</p>
              <figure class="my-4">
                <img src="{{ asset('uploads/'.$data_resensi->photo) }}" alt="" class="img-fluid" style="max-width: 900px">
              </figure>
              <p>{!! nl2br(e($data_resensi->deskripsi)) !!}</p>
            </div><!-- End Single Post Content -->

          </div>
          <div class="col-md-3">

              <div class="tab-content" id="pills-tabContent">
                @foreach ($resensi_data as $item)
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta">  <span>{{ $item->tanggal }}</span></div>
                    <h2 class="mb-2"><a href="{{ route('resensi_detail',$item->id) }}">{{ $item->judul }}</a></h2>
                    <span class="author mb-3 d-block">{{ $item->nama }}</span>
                  </div>
                </div>
                @endforeach

              </div>
            </div>

@endsection
