<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Divisi</title>
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
  <link href="{{ asset('dist_front/divisi/css/main-4.css') }}" rel="stylesheet">
  <link href="{{ asset('dist_front/divisi/css/main-2.css') }}" rel="stylesheet">
  <!-- <link href="assets/css/main-5.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/main.css" rel="stylesheet"> -->

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
    
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Divisi</h2>
        <p>Ini adalah divisi divisi kami. Mana nih favorit kalian?</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        
        <div class="row justify-content-center gy-5">

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('dist_front/divisi/img/person_reading_book.jpg') }}" class="img-fluid-2" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-book"></i>
                </div>
                <a class="stretched-link">
                  <h3>Reading</h3>
                </a>
                <p>
                  Reading adalah salah satu divisi utama dari WJLRC yang berfokus pada kegiatan membaca dan pengembangan minat baca anggota. Divisi ini bertanggung jawab untuk mengorganisir berbagai aktivitas yang berkaitan dengan literasi, seperti resensi buku dan tantangan membaca.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->
  
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('dist_front/divisi/img/writing (2).jpg') }}" class="img-fluid-2" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-pencil"></i>
                </div>
                <a class="stretched-link">
                  <h3>Writing</h3>
                </a>
                <p>
                  Writing adalah salah satu divisi dari WJLRC
                  yang berfokus pada pengembangan
                  keterampilan menulis anggota. Divisi ini
                  bertanggung jawab untuk mengorganisir
                  berbagai kegiatan yang berkaitan dengan
                  penulisan, seperti menulis cerpen, novel dan
                  karya lainnya.                  
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->
  
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('dist_front/divisi/img/speaking.jpg') }}" class="img-fluid-2" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-mic"></i>
                </div>
                <a class="stretched-link">
                  <h3>Speaking</h3>
                </a>
                <p>
                  Speaking adalah salah satu divisi dari WJLRC
                  yang berfokus pada pengembangan
                  keterampilan berbicara di depan umum dan
                  komunikasi verbal anggota. Divisi ini
                  bertanggung jawab untuk mengorganisir
                  berbagai kegiatan seperti public speaking dan
                  podcast.                  
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
              <div class="service-item">
                <div class="img">
                  <img src="{{ asset('dist_front/divisi/img/digital.jpg') }}" class="img-fluid-2" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-laptop"></i>
                  </div>
                  <a class="stretched-link">
                    <h3>Literasi Digital</h3>
                  </a>
                  <p>
                    Literasi Digital adalah salah satu divisi dari
                    WJLRC yang berfokus pada pengembangan
                    keterampilan literasi digital anggota. Divisi ini
                    bertanggung jawab untuk mengorganisir
                    berbagai kegiatan yang berkaitan dengan
                    penggunaan teknologi digital dalam konteks
                    literasi, seperti konten digital dan resensi
                    digital                  
                  </p>
                  <a class="stretched-link"></a>
                </div>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
              <div class="service-item">
                <div class="img">
                  <img src="{{ asset('dist_front/divisi/img/english.jpg') }}" class="img-fluid-2" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-translate"></i>
                  </div>
                  <a class="stretched-link">
                    <h3>English Program</h3>
                  </a>
                  <p>
                    English Program adalah salah satu divisi
                    terbaru dari WJLRC yang berfokus pada
                    pengembangan keterampilan bahasa Inggris
                    anggota. Divisi ini bertanggung jawab untuk
                    mengorganisir berbagai kegiatan yang
                    berkaitan dengan pembelajaran dan praktik
                    bahasa Inggris.                  </p>
                  <a class="stretched-link"></a>
                </div>
              </div>
            </div><!-- End Service Item -->
          </div>
        </div>
        
        
      </div>

    </section><!-- /Services Section -->
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