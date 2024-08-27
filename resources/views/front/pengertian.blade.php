<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pengertian WJLRC</title>
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
  <link href="{{ asset('dist_front/pengertian/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('dist_front/pengertian/css/main-2.css') }}" rel="stylesheet">

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
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('dist_front/pengertian/img/20240522_120245.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Apa itu WJLRC?</h3>
            <p>
              WJLRC atau yang bisa di sebut sebagai West Java Leader’s Reading Challenge adalah ekstrakulikuler yang bergerak di SMK Budi Bakti Ciwidey yang berfokus pada tantangan membaca dan kegiatan literasi lainnya. WJLRC awal mulanya bernama LRCKB. Namun sejak 2023, ekstrakulikuler ini berganti nama menjadi WJLRC.
            </p>
            <p>
              Visi ekstrakulikuler WJLRC yaitu Menjadikan SMK Budi Bakti melek literasi. Misi WJLRC adalah sebagai berikut : 
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Menumbuhkembangkan budaya literasi membaca dan menulis di sekolah</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Meningkatkan fasilitas di lingkungan sekolah yang mendukung akan literasi</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Menjadikan sekolah sebagaitaman belajar yang menyenangkan dan ramah agar warga 
                sekolah mampu memaksimalkan pengetahuannya.</span></li>
            </ul>
          </div>
        </div>

      </div>

    </section><!-- /About Alt Section -->

    <!-- Services Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sejarah Singkat</h2>
        <p>Ini adalah sejarah singkat WJLRC</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="resume-item">
              <h3><strong>2010</strong></h3>
              <p>Dinas Pendidikan Jawa Barat mengirim guru berprestasi untuk pelatihan profesionalisme di DECD South Australia.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h3><strong>2012</strong></h3>
              <p>Guru Jawa Barat mengadopsi Premier’s Reading Challenge (PRC) dari Australia untuk melestarikan budaya baca dan meningkatkan literasi siswa.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h3><strong>2013 - 2014</strong></h3>
              <p>Profesor Wahyudin Zarkasyi mengizinkan ujicoba kedua di 230 sekolah Jawa Barat dengan dana mandiri guru alumni pelatihan di Australia.</p>
            </div><!-- Edn Resume Item -->
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="resume-item">
              <h3><strong>Januari 2015</strong></h3>
              <p>Gubernur Jawa Barat mengundang wakil 5 sekolah terbaik WJLRC 2013-2014 dari Bandung, Bandung Barat, Bekasi, Cirebon, dan Majalengka untuk sarapan di Gedung Pakuan.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h3><strong>Mei 2015</strong></h3>
              <p>Berlangsung festival Literasi Jawa Barat bertempat di Badan Perpustakaan dan Arsip Daerah Provinsi Jawa Barat.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h3><strong>September 2015</strong></h3>
              <p>Di Adelaide, pimpinan Jawa Barat dan South Australia menandatangani MoU Sister Cooperation, termasuk pendidikan. Keberhasilan WJLRC dan PRC menjadi indikator kesuksesan kerjasama.</p>
            </div><!-- Edn Resume Item -->

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