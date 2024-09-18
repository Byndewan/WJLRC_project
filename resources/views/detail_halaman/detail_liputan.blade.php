@extends('detail_halaman.layout.app')

@section('title', 'Detail - liputan')

@section('main_content')
            <!-- ======= Single Post Content ======= -->
            <div class="single-post" style="margin-bottom: 50px;">
              <div class="post-meta"><span class="mx-1">&bullet;</span> <span>{{ $data_liputan->tanggal }}</span></div>
              <h1 class="mb-5">{{ $data_liputan->judul }}</h1>
              <p class="post-meta" style="margin-bottom : 20px; font-size: 15px;">{{ $data_liputan->nama }}</p>
              <figure class="my-4">
                <img src="{{ asset('uploads/'.$data_liputan->photo) }}" alt="" class="img-fluid" style="max-width: 900px">
                {{-- <figcaption>{{ $data_liputan->judul }}</figcaption> --}}
              </figure>
              <p>{!! nl2br($data_liputan->deskripsi) !!}</p>
            </div>
          </div>
          <div class="col-md-3">

              <div class="tab-content" id="pills-tabContent">
                @foreach ($liputan_data as $item)
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span>{{ $item->tanggal }}</span></div>
                    <h2 class="mb-2"><a href="{{ route('detail_liputan', $item->id) }}">{{ $item->judul }}</a></h2>
                    <span class="author mb-3 d-block">{{ $item->nama }}</span>
                  </div>
                </div> <!-- End Popular -->
                @endforeach
              </div>
            </div>
 @endsection
