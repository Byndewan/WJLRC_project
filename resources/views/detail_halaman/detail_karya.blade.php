@extends('detail_halaman.layout.app')

@section('title', 'Detail - Karya')

@section('main_content')
            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h1 class="mb-5">Tidak Apa Apa</h1>
              <p class="post-meta" style="margin-bottom : 20px; font-size: 15px;">Pasya Fadla Fauzan</p>
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
                <img src="{{ asset('dist_detail/assets/img/okay.jpg') }}" alt="" class="img-fluid" style="max-width: 900px">
                <figcaption>Tidak Apa Apa </figcaption>
              </figure>
              <p>Sudah tiga tahun lamanya aku berkecimpung di dunia literasi. Selama itu pula aku baru dapat menghasilkan dua novel yang tak kunjung menjadi 'novel', serta beberapa cerita pendek yang semuanya aku publikasikan di platform Wattpad.</p>
              <p>Setahun belakangan ini aku absen dari dunia kepenulisan. Aku sudah mencoba berbagai usaha untuk melawan writer block, tapi nyatanya belum ada satupun karya yang dapat selesai dan selalu stuck di tengah jalan. Bahkan, beberapa bulan terakhir ini aku benar-benar tidak menulis cerita sama sekali.</p>
              <p>Entahlah, aku rasa mimpiku menjadi seorang penulis terkenal hanya sekedar impian saja. Pada akhirnya mimpi itu berhenti sebelum aku berhasil menerbitkan satu novel. Tidak apa-apa, mungkin ada jalan lain yang membawaku menuju kesuksesan. Lagi pula aku masih muda, masih panjang perjalanan hidupku.</p>
              <p>Aku belum menemukan minat lain selain menulis cerita. Hari-hariku hanya diisi dengan belajar, belajar, dan belajar. Eh, satu yang ketinggalan. Belajar, belajar, dan belajar untuk berhenti mencintainya. </p>
              <p>Di sisa-sisa kelas sepuluh aku memasuki fase kebosanan sepanjang hari. Bagaimana tidak bosan, hari-hari yang aku lakukan tidur, makan, tidur, makan. Meski sebenarnya ada kegiatan event di sekolahan, hanya saja tidak ada event satu pun yang berhasil menarik perhatianku. Juga, bersyukurnya semester kedua ini tidak ada satu mata pelajaran yang mengharuskan aku remedial.</p>
              <p>Kelas sebelas nanti aku berencana untuk menulis cerita kembali—jika tidak ada yang membangunkan mimpi indahku. Tidak, aku hanya bercanda. Rencanaku di kelas sebelas nanti adalah melupakannya dan memulai lembaran baru. Siapa -nya yang ku maksud?</p>
              <p>Thoriq Perdana. Anak X IPA 3 yang berhasil menjadi gebetan pertamaku di SMA. Bukan cuman yang pertama sih, sampai sekarang belum ada yang bisa mengalahkan pesona seorang Thoriq, bukan Thoriq halilintar, ya.</p>
              <p>Berawal dari satu gugus saat LDKS (Latihan Dasar Kepemimpinan Siswa) yang kala itu aku mewakili ekstrakurikuler English Club, dan dia mewakili ekstrakurikuler futsal. 
“Salam kenal, aku—”
</p>
              <p>Aku memotong omongannya, mencoba menebak. Mukanya tidak asing bagiku. Beberapa kali aku pernah melihat dia, dan tak sengaja juga sempat mendengar seseorang menyebut namanya.  “Thoriq anak IPA 3 bukan?”</p>
              <p>Dia mengangguk setuju. “Salam kenal, ya. Keren banget masuk English Club. Aku sempat lihat kamu pas ke depan buat bacain pidato dalam bahasa Inggris.”</p>
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

