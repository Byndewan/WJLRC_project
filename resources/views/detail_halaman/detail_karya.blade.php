@extends('detail_halaman.layout.app')

@section('title', 'Detail - Karya')

@section('main_content')
            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>{{ $data_karya->tanggal }}</span></div>
              <h1 class="mb-5">{{ $data_karya->judul }}</h1>
              <p class="post-meta" style="margin-bottom : 20px; font-size: 15px;">{{ $data_karya->nama }}</p>
              <div class="icon-container">
                    <div class="icon-item">
                        <i class="bi bi-heart"></i>
                        <p>2.3K</p>
                    </div>
                    <div class="icon-item">
                        <i class="bi bi-eye"></i>
                        <p>2.3K</p>
                    </div>
                    <div class="icon-item">
                        <i class="bi bi-chat"></i>
                        <p>2.3K</p>
                    </div>
              </div>
              <figure class="my-4">
                <img src="{{ asset('uploads/'.$data_karya->photo) }}" alt="" class="img-fluid" style="max-width: 900px">
                <figcaption>{{ $data_karya->judul }} </figcaption>
              </figure>
              <p>{!! nl2br($data_karya->deskripsi) !!}</p>
            </div><!-- End Single Post Content -->

            <!-- ======= Comments ======= -->
            <div class="comments">
                <h5 class="comment-title py-4">{{ $comments->count() }} Comments</h5>

                @foreach ($comments as $comment)
                <div class="comment">
                    <div class="comment-main d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="avatar avatar-sm rounded-circle">
                                <img class="avatar-img" src="{{ asset('dist_detail/assets/img/team/team-1.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                            <div class="comment-meta d-flex align-items-baseline">
                                <h6 class="me-2">{{ $comment->user->name }}</h6>
                                <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="comment-body">
                                {{ $comment->body }}
                            </div>
                            <div class="comment-actions d-flex">
                                <button class="reply-toggle" onclick="toggleReplies(this)">
                                    Show Replies <i class="fas fa-chevron-down"></i>
                                </button>
                                <button class="reply-button" onclick="addReplyForm(this, {{ $comment->id }})">
                                    Reply
                                </button>
                            </div>

                            <!-- Replies Section -->
                            <div class="replies bg-light p-3 mt-3 rounded " style="display: none;">
                                <h6 class="comment-replies-title mb-4 text-muted text-uppercase">{{ $comment->replies->count() }} replies</h6>
                                @foreach ($comment->replies as $reply)
                                <div class="reply d-flex mb-4">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm rounded-circle">
                                            <img class="avatar-img" src="{{ asset('dist_detail/assets/img/team/team-1.jpg') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                        <div class="reply-meta d-flex align-items-baseline">
                                            <h6 class="mb-0 me-2">{{ $reply->user->name }}</h6>
                                            <span class="text-muted">{{ $reply->created_at ? $reply->created_at->diffForHumans() : 'No date' }}</span>
                                            <span class="text-muted">{{ $reply->created_at->diffForHumans() }}</span>

                                        </div>
                                        <div class="reply-body">
                                            {{ $reply->body }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> <!-- End Replies -->
                        </div>
                    </div>
                </div> <!-- End Comment -->
                @endforeach
            </div> <!-- End Comments Section -->

            <!-- Comment Form -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                    <h5 class="comment-title">Leave a Comment</h5>
                    <form action="{{ route('comment') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="comment-message">Message</label>
                                <textarea name="comment" class="form-control" id="comment-message" placeholder="Enter your comment" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-primary" value="comment">
                                <textarea name="body" class="form-control" id="comment-message" placeholder="Enter your comment" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-primary" value="Post comment">
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- End Comment Form -->

          </div>
          <div class="col-md-3">

              <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                </div> <!-- End Popular -->

              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">Tags</h3>
              <ul class="aside-tags list-unstyled">
                <li><a href="#">Business</a></li>
                <li><a href="#">Culture</a></li>
                <li><a href="#">Sport</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">Celebrity</a></li>
                <li><a href="#">Startups</a></li>
                <li><a href="#">Travel</a></li>
              </ul>
            </div><!-- End Tags -->
@endsection
