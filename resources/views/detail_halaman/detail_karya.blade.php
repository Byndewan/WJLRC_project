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
                        <p>{{ $comments->count() }}</p>
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
<<<<<<< HEAD
                <h5 class="comment-title py-4">2 Comments</h5>
                <div class="comment d-flex mb-4">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                      <img class="avatar-img" src="assets/img/person-5.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex align-items-baseline">
                      <h6 class="me-2">Jordan Singer</h6>
                      <span class="text-muted">2d</span>
                    </div>
                    <div class="comment-body">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at amet doloremque qui magni, placeat deserunt pariatur itaque laudantium impedit aliquam eligendi repellendus excepturi quibusdam nobis esse accusantium.
                    </div>

                    <div class="comment-replies bg-light p-3 mt-3 rounded">
                      <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                      <div class="reply d-flex mb-4">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm rounded-circle">
                            <img class="avatar-img" src="assets/img/person-4.jpg" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                          <div class="reply-meta d-flex align-items-baseline">
                            <h6 class="mb-0 me-2">Brandon Smith</h6>
                            <span class="text-muted">2d</span>
                          </div>
                          <div class="reply-body">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                          </div>
                        </div>
                      </div>
                      <div class="reply d-flex">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm rounded-circle">
                            <img class="avatar-img" src="assets/img/person-3.jpg" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                          <div class="reply-meta d-flex align-items-baseline">
                            <h6 class="mb-0 me-2">James Parsons</h6>
                            <span class="text-muted">1d</span>
                          </div>
                          <div class="reply-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore sed eos sapiente, praesentium.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="comment d-flex">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                      <img class="avatar-img" src="assets/img/person-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="flex-shrink-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex">
                      <h6 class="me-2">Santiago Roberts</h6>
                      <span class="text-muted">4d</span>
                    </div>
                    <div class="comment-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.
                    </div>
                  </div>
                </div>
              </div><!-- End Comments -->

              <!-- ======= Comments Form ======= -->
              <div class="row justify-content-center mt-5">

                <div class="col-lg-12">
                  <h5 class="comment-title">Leave a Comment</h5>
                  <div class="row">
                    <div class="col-12 mb-3">
                      <label for="comment-message">Message</label>

                      <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary" value="Post comment">
                    </div>
                  </div>
                </div>
              </div><!-- End Comments Form -->
=======
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

>>>>>>> f021373848b96d41fa8804e99dc16e1c96465377

          </div>
          <div class="col-md-3">

              <div class="tab-content" id="pills-tabContent">

                @foreach ($karya_data as $item)
                <a href="{{ route('detail_karya', $item->id) }}">
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>{{ $item->tanggal }}</span></div>
                    <h2 class="mb-2"><a href="{{ route('detail_karya', $item->id) }}">{{ $item->judul }}</a></h2>
                    
                    <span class="author mb-3 d-block">{{ $item->nama }}</span>
                  </div>
                </div> <!-- End Popular -->
            </a>
                @endforeach

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

