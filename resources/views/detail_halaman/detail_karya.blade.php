@extends('detail_halaman.layout.app')

@section('title', 'Detail - Karya')

@section('main_content')
    <!-- ======= Single Post Content ======= -->
    <div class="single-post">
        <div class="post-meta"><span class="date">{{ $karya_data->nama_kategori }}</span> <span class="mx-1">&bullet;</span><span>{{ $data_karya->tanggal }}</span></div>
        <h1 class="mb-5">{{ $data_karya->judul }}</h1>
        <p class="post-meta" style="margin-bottom : 20px; font-size: 15px;">{{ $data_karya->nama }}</p>
        <div class="icon-container">
            <div class="icon-item">
                    <form action="{{ route('karya.like', $karya->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="fw-light nav-link fs-6"> <span class="bi bi-heart me-1"></span> {{ $karya->likes()->count() }}</button>
                    </form>
            </div>
            <div class="icon-item">
                <i><span class="bi bi-chat"></span></i>
                <p>{{ $karya->comments->count() }}</p>
            </div>
        </div>
    </div>
        <figure class="my-4">
            <img src="{{ asset('uploads/' . $data_karya->photo) }}" alt="" class="img-fluid" style="max-width: 900px">
            <figcaption>{{ $data_karya->judul }} </figcaption>
        </figure>
        <p>{!! nl2br($data_karya->deskripsi) !!}</p>
    </div><!-- End Single Post Content -->

    <!-- Comments Section -->
    <div class="col-md-3">

        <div class="tab-content" id="pills-tabContent">

            @foreach ($karya_data as $item)
                <a href="{{ route('detail_karya', $item->id) }}">
                    <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                        aria-labelledby="pills-popular-tab">
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span>
                                <span>{{ $item->tanggal }}</span>
                            </div>
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

    @foreach ($karya->comments as $comment)
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
                    {{-- <div class="comment-actions d-flex">
                        <button class="reply-toggle" onclick="toggleReplies(this)">
                            Show Replies <i class="fas fa-chevron-down"></i>
                        </button>
                        <button class="reply-button" onclick="addReplyForm(this, {{ $comment->id }})">
                            Reply
                        </button>
                        <form id="reply-form-{{ $comment->id }}" style="display: none;">
                            @csrf
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                            <textarea name="body" required></textarea>
                            <button class="reply-button" onclick="(this, {{ $comment->id }})">
                                Reply
                            </button>
                        </form>
                    </div> --}}

                    <!-- Replies Section -->
                    {{-- <div>
                        <div class="replies bg-light p-3 mt-3 rounded " style="display: none;">
                            <h6 class="comment-replies-title mb-4 text-muted text-uppercase">
                                {{ $comment->replies->count() }}
                                replies</h6>
                            @foreach ($comment->replies as $reply)
                                <div class="reply d-flex mb-4">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm rounded-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('dist_detail/assets/img/team/team-1.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                        <div class="reply-meta d-flex align-items-baseline">
                                            <h6 class="mb-0 me-2">{{ $reply->user->name }}</h6>
                                            <span
                                                class="text-muted">{{ $reply->created_at ? $reply->created_at->diffForHumans() : 'No date' }}</span>
                                            <span class="text-muted">{{ $reply->created_at->diffForHumans() }}</span>

                                        </div>
                                        <div class="reply-body">
                                            {{ $reply->body }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> <!-- End Replies -->
                    </div> --}}
                </div>
            </div>
        </div> <!-- End Comment -->
    @endforeach
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
                        <input type="submit" class="btn btn-primary" value="Comment">
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- End Comment Form -->
    </div>
@endsection
