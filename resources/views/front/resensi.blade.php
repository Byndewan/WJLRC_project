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
        <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <a href=""><img src="{{ asset('dist_front/resensi/img/komet.png') }}" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
              <h2><a href="">Komet karya Tere Liye </a></h2>
              <span class="author mb-3 d-block">Azlia Nisrina Afifah</span>
              <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>
            </div>

          </div>

          <div class="col-lg-8">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/Bumi.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Bumi karya Tere Liye</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/matahari.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Matahari karya Tere Liye</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/bulan.png') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Bulan karya Tere Liye</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/hilmy milan.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Hilmy Milan karya Nadia Ristivani</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/Love-From-A-to-Z.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
                  <h2><a href="">Love from A to Z karya S.K Ali</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/alpha girls.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
                  <h2><a href="">Alpha Girl's Guide karya Henry Manampiring</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/dork diaries.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Dork Diaries karya Rachel Renee</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/conversation on love.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span class="mx-1"></span> <span>1 Maret 2022</span></div>
                  <h2><a href="">Conversation on Love karya Natasha Lunn</a></h2>                  
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/geez ann.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
                  <h2><a href="">Geez and Ann karya Rintik Sedu</a></h2>
                  <div class="post-meta" style="color: #b3b3b3;"><span>Azlia Nisrina Afifah</span></div>
                </div>
              </div>

                          </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Culture Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-9">

            <div class="d-lg-flex post-entry-2">
              <a href="" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="{{ asset('dist_front/resensi/img/love scenario.jpg') }}" alt="" class="img-fluid img-fluid-2">
              </a>
              <div>
                <div class="post-meta"> <span class="mx-1"></span> <span>5 Juli 2022</span></div>
                <h3><a href="">Love Scenario karya Cantika Zahra</a></h3>
                <span class="author mb-3 d-block">Azlia Nisrina Afifah</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="post-entry-1 border-bottom">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/antares.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span>5 Juli 2022</span></div>
                  <h2 class="mb-2"><a href="">Antares karya Rweinda</a></h2>
                  <span class="author mb-3 d-block">Azlia Nisrina Afifah</span>
                  <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="post-entry-1">
                  <a href=""><img src="{{ asset('dist_front/resensi/img/dago setelah hujan.jpg') }}" alt="" class="img-fluid"></a>
                  <div class="post-meta"> <span>5 Juli 2022</span></div>
                  <h2 class="mb-2"><a href="">Dago Setelah Hujan karya Skyshpire</a></h2>
                  <span class="author mb-3 d-block">Azlia Nisrina Afifah</span>
                  <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="post-entry-1">
              <a href=""><img src="{{ asset('dist_front/resensi/img/galaksi.jpg') }}" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="mx-1"></span> <span>5 Juli 2022</span></div>
              <h2><a href="">Galaksi karya Poppy Pertiwi</a></h2>
              <span class="author mb-3 d-block">Azlia Nisrina Afifah</span>
            </div>
            <div class="post-entry-1">
              <a href=""><img src="{{ asset('dist_front/resensi/img/Dunia-Sophie.jpg') }}" alt="" class="img-fluid"></a>
              <div class="post-meta"> <span class="mx-1"></span> <span>17 Juli 2022</span></div>
              <h2><a href="">Dunia Sophie karya Jostein Gaarder</a></h2>
              <span class="author mb-3 d-block">Azlia Nisrina Afifah</span>
            </div>
            <div class="post-entry-1">
              <a href=""><img src="{{ asset('dist_front/resensi/img/filosofi teras.jpg') }}" alt="" class="img-fluid"></a>
              <div class="post-meta"> <span class="mx-1"></span> <span>15 Maret 2022</span></div>
              <h2><a href="">Filosofi Teras karya Henry Manampiring</a></h2>
              <span class="author mb-3 d-block">Azlia Nisrina Afifah</span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Culture Category Section -->

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