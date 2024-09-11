<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Karya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @include('layout.logo')

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  @include('layout.styles')

  <!-- Main CSS File -->
  <link href="{{ asset('dist_front/karya/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('dist_front/karya/css-2/main.css') }}" rel="stylesheet" >

  <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      @include('layout.nav')

    </div>
  </header>

  <main id="main">

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
          <div class="col-lg-12">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/Bumi.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Bumi</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Tere Liye</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/matahari.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Matahari</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Tere Liye</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/bulan.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Bulan</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Tere Liye</span></div>
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
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/Bumi.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Bumi</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Tere Liye</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/matahari.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Matahari</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Tere Liye</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/bulan.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Bulan</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Tere Liye</span></div>
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
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/hilmy milan.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Hilmy Milan</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Nadia Ristivani</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/Love-From-A-to-Z.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Love from A to Z</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>S.K Ali</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/alpha girls.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Alpha Girl's Guide</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Henry Manampiring</span></div>
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
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/hilmy milan.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Hilmy Milan</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Nadia Ristivani</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/Love-From-A-to-Z.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Love from A to Z</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>S.K Ali</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/alpha girls.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Alpha Girl's Guide</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Henry Manampiring</span></div>
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
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/dork diaries.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Dork Diaries</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Rachel Renee</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/conversation on love.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>1 Maret 2022</span></div>
                  <h2><a href="">Conversation on Love</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Natasha Lunn</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/geez ann.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Geez and Ann</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Rintik Sedu</span></div>
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
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/dork diaries.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Dork Diaries</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Rachel Renee</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/conversation on love.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>1 Maret 2022</span></div>
                  <h2><a href="">Conversation on Love</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Natasha Lunn</span></div>
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
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('detail_karya') }}"><img src="{{ asset('dist_front/karya/img/geez ann.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Geez and Ann</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Rintik Sedu</span></div>
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
                </div>
              </div>

                          </div>
          </div>

        {{-- </div> <!-- End .row --> --}}
      </div>
    </section> <!-- End Post Grid Section -->

  </main><!-- End #main -->

  @include('layout.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @include('layout.scripts')

</body>

</html>
