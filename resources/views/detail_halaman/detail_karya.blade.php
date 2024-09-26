@extends('detail_halaman.layout.app')

@section('title', 'Detail - Karya')

@section('main_content')
    <!-- ======= Single Post Content ======= -->
    <div>
    <div class="single-post">
        <div class="post-meta"><span class="date">{{ $karya_kategori->kategori->nama_kategori }}</span> <span class="mx-1">&bullet;</span><span>{{ $karya_kategori->tanggal }}</span></div>
        <h1 class="mb-5">{{ $karya_kategori->judul }}</h1>
        <p class="post-meta" style="margin-bottom : 20px; font-size: 15px;">{{ $karya_kategori->nama }}</p>
        <p class="post-meta" style="margin-bottom : 20px; font-size: 15px;">{{ $karya_kategori->penulis }}</p>
    </div>
        <div class="icon-container">

            <div class="icon-item">

                @if (Auth::user()->likeskarya($karya))
                <form action="{{ route('karya.unlike', $karya->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="fw-light nav-link fs-6"> <span class="bi bi-heart-fill hati"></span> {{ $karya->likes()->count() }}</button>
                </form>
                @else
                <form action="{{ route('karya.like', $karya->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="fw-light nav-link fs-6"> <span class="bi bi-heart"></span> {{ $karya->likes()->count() }}</button>
                </form>
                @endif
            </div>


            <div class="icon-item">
                <i><span class="bi bi-chat"></span></i>
                <p>{{ $karya->comments->count() }}</p>
            </div>
        </div>
    </div>
        <figure class="my-4">
            <img src="{{ asset('uploads/' . $karya_kategori->photo) }}" alt="" class="img-fluid" style="max-width: 900px">
        </figure>
        <p>{!! nl2br($karya_kategori->deskripsi) !!}</p>
    </div><!-- End Single Post Content -->

    <!-- Comments Section -->
    <div class="col-md-3">

        <div class="tab-content" id="pills-tabContent">

            @foreach ($karya_data as $item)
                <a href="{{ route('detail_karya', $item->id) }}">
                    <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                        aria-labelledby="pills-popular-tab">
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">{{ $item->kategori->nama_kategori }}</span> <span class="mx-1">&bullet;</span>
                                <span>{{ $item->tanggal }}</span></div>
                            <h2 class="mb-2"><a href="{{ route('detail_karya', $item->id) }}">{{ $item->judul }}</a></h2>

                            <span class="author mb-3 d-block">{{ $item->penulis }}</span>
                        </div>
                    </div> <!-- End Popular -->
                </a>
            @endforeach

        </div>
    </div>

    <h5 class="comment-title py-4">{{ $karya->comments->count() }} Comments</h5>

    @forelse ($karya->comments as $comment)
        <div class="comment">
            <div class="comment-main d-flex mb-4">
                <div class="flex-shrink-0">
                </div>
                <div class="flex-grow-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex align-items-baseline">
                        <h6 class="me-2">{{ Auth::guard('web')->user()->name }}</h6>
                        <span class="text-muted">  {{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="comment-body">
                        {{ $comment->body }}
                    </div>
                </div>
            </div>
        </div> <!-- End Comment -->
        @empty
        <p class="text-center mt-4"><strong>Belum Ada Komentar</strong></p>
    @endforelse
    </div> <!-- End Comments Section -->

    <!-- Comment Form -->
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <h5 class="comment-title">Leave a Comment</h5>
            <form action="{{ route('karya.comment.store',$karya->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ Auth::id() }}">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div>
                        <label for="comment-message">Message</label>
                        </div>
                        <textarea name="body" class="form-control" id="comment-message"   placeholder="Enter your comment" cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="col-12">
                        <input style="margin-bottom: 30px;" type="submit" class="btn btn-primary" value="Comment">
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- End Comment Form -->
    </div>
@endsection
