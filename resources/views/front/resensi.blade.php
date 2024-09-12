<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Resensi</title>
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
  <link href="{{ asset('dist_front/resensi/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('dist_front/resensi/css-2/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      @include('layout.nav')

    </div>
  </header>

  <main id="main">

    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-12">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/Bumi.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Bumi karya Tere Liye</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/matahari.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Matahari karya Tere Liye</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/bulan.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Bulan karya Tere Liye</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/hilmy milan.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Hilmy Milan karya Nadia Ristivani</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/Love-From-A-to-Z.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Love from A to Z karya S.K Ali</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/alpha girls.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Alpha Girl's Guide karya Henry Manampiring</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/dork diaries.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Dork Diaries karya Rachel Renee</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/conversation on love.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>1 Maret 2022</span></div>
                  <h2><a href="">Conversation on Love karya Natasha Lunn</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href="{{ route('resensi_detail') }}"><img src="{{ asset('dist_front/resensi/img/geez ann.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Geez and Ann karya Rintik Sedu</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
              </div>
              </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @include('layout.footer')

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  @include('layout.scripts')

</body>

</html>
