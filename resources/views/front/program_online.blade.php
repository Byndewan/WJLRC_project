<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Program Online</title>
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
  <link href="{{ asset('dist_front/program_online/css/main.css') }}" rel="stylesheet">

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

  <main class="main">
    <!-- About Alt Section -->
    <section id="about-alt" class="about-alt section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('dist_front/program_online/img/wjlrc_podcast.jpg') }}" style="max-width: 70%; border-radius: 5%;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 justify-content-center content" style="margin-top: 85px;" data-aos="fade-up" data-aos-delay="200">
            <h3>WJLRC Podcast</h3>
            <p style="font-size: 20px;">
              Podcast adalah satu program unggulan yang ada di ekstrakulikuler WJLRC yang berfokus untuk meningkatkan keterampilan berbicara melalui pelatihan membuat dan mengisi podcast di setiap episodenya. Kita juga memiliki podcast di spotify loh yaitu WJLRC Podcast!
            </p>
            <a href="{{ asset('https://podcasters.spotify.com/pod/show/wjlrc-smk-bbc') }}" style="text-decoration: underline; font-size: 15px;"><p>Link Podcast WJLRC</p></a>
          </div>
        </div>

      </div>

    </section><!-- /About Alt Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resensi Digital</h2>
        <p>Intip yuk karya karya resensi teman kalian!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <a href="">
              <div class="team-member">
                <div class="member-img">
                  <img src="{{ asset('dist_front/program_online/img/Bumi.png') }}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Bumi</h4>
                  <span>Azlia Nisrina Afifah</span>
                  <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
                </div>
              </div>
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <a href="">
              <div class="team-member">
                <div class="member-img">
                  <img src="{{ asset('dist_front/program_online/img/bulan.png') }}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Bulan</h4>
                  <span>Azlia Nisrina Afifah</span>
                  <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
                </div>
              </div>
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <a href="">
              <div class="team-member">
                <div class="member-img">
                  <img src="{{ asset('dist_front/program_online/img/matahari.png') }}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Matahari</h4>
                  <span>Azlia Nisrina Afifah</span>
                  <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
                </div>
              </div>
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <a href="">
              <div class="team-member">
                <div class="member-img">
                  <img src="{{ asset('dist_front/program_online/img/komet.png') }}" style="max-width: 100%;" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Komet</h4>
                  <span>Azlia Nisrina Afifah</span>
                  <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
                </div>
              </div>
            </a>
          </div><!-- End Team Member -->

          <a href="{{ route('resensi') }}" class="justify-content-center" style="display: flex; text-decoration: underline;" >Lihat yang lainnya &#8594;</a>

        </div>

      </div>

    </section><!-- /Team Section -->

   <!-- Team Section -->
   <section id="team" class="team section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Konten Digital</h2>
      <p>Intip yuk konten teman kalian!</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/konten-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Tips membangun kerja sama tim yang baik</h4>
                <span>Desma Khoirunisa</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/konten-2.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Apa itu literasi?</h4>
                <span>Nameera Putri Prianti</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/konten-3.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>5 Cara Efektif Mengatur Waktu dengan Baik</h4>
                <span>Andika Bagja Gumelar</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/konten-4.jpg') }}" style="max-width: 100%;" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Bagaimana sih cara menghitung perkalian dengan mudah?
                </h4>
                <span>Gista Aulia</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <a href="{{ route('konten') }}" class="justify-content-center" style="display: flex; text-decoration: underline;" >Lihat yang lainnya &#8594;</a>

      </div>

    </div>

  </section><!-- /Team Section -->

  <section id="team" class="team section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Liputan dan Dokumentasi</h2>
      <p>Ini adalah berita berita yang sedang ada di SMK Budi Bakti Ciwidey</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/maulid_nabi.jpeg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Acara Maulid Nabi 2023</h4>
                <span>Azlia Nisrina Afifah</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/maulid_nabi.jpeg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Acara Maulid Nabi 2023</h4>
                <span>Azlia Nisrina Afifah</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/maulid_nabi.jpeg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Acara Maulid Nabi 2023</h4>
                <span>Azlia Nisrina Afifah</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <a href="">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/program_online/img/maulid_nabi.jpeg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Acara Maulid Nabi 2023</h4>
                <span>Azlia Nisrina Afifah</span>
                <p style="margin-top: 6px; font-size: 14px; color: #444444;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem fugit exercitationem laborum minima eveniet impedit quis voluptatum? Fugit vero at eveniet quod ducimus minima libero quos tenetur similique blanditiis?</p>
              </div>
            </div>
          </a>
        </div><!-- End Team Member -->

        <a href="{{ route('liputan') }}" class="justify-content-center" style="display: flex; text-decoration: underline;" >Lihat yang lainnya &#8594;</a>

      </div>

    </div>

  </section><!-- /Team Section -->
  
  

  </main>

  @include('layout.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- JS Files -->
  @include('layout.scripts')

</body>

</html>