<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Program Offline</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LOGO_WJLRC-removebg-preview.png" rel="icon">
  <link href="assets/img/LOGO_WJLRC-removebg-preview.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  @include('layout.styles')

  <!-- Main CSS File -->
  <link href="{{ asset('dist_front/program_offline/css/main.css') }}" rel="stylesheet">

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

      <!-- 1 -->
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('dist_front/program_offline/img/kumpul rutin.jpg') }}" class="img-fluid" style="border-radius: 5%;" alt="">
          </div>
          <div class="col-lg-6 content" style="margin-top: 70px;" data-aos="fade-up" data-aos-delay="200">
            <h3>Kumpul Rutin</h3>
            <p style="font-size: 20px;">
              Kumpul rutin adalah pertemuan berkala yang
dilakukan oleh seluruh anggota WJLRC. Tujuan
dari kumpul rutin ini adalah untuk berbagi
informasi, berdiskusi tentang perkembangan
terbaru, mengadakan pelatihan, dan
mempererat hubungan antar anggota.
Biasanya kami mengadakan kumpul rutin setiap
hari rabu dan sabtu, jam 12 siang di Perpustakaan SMK Budi Bakti Ciwidey.
            </p>
          </div>
        </div><br><br><br>
      </div>


      <!-- 3 -->
<!-- Team Section -->
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Mading</h2>
    <p>Kita lihat lihat mading yang pernag di buat di bbc yuk!</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

        @foreach ($data_mading as $item)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('detail_mading',$item->id) }}">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ asset('uploads/'.$item->photo) }}" class="img-fluid-2" alt="">
            </div>
            <div class="member-info">
              <h4>{{ $item->judul }}</h4>
              <span>{{ $item->nama }}</span>
              {{-- <p style="margin-top: 6px; font-size: 14px; color: #444444;">{{ $item->deskripsi }}</p> --}}
            </div>
          </div>
        </a>
      </div><!-- End Team Member -->
      @endforeach

      <a href="{{ route('mading') }}" class="justify-content-center" style="display: flex; text-decoration: underline;" >Lihat yang lainnya &#8594;</a>

    </div>

  </div>

</section><br><br><br><!-- /Team Section -->

<!-- 3 -->
<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 position-relative d-flex justify-content-center align-self-start" data-aos="fade-up" data-aos-delay="100">
      <img src="{{ asset('dist_front/program_offline/img/taman baca.jpg') }}" class="img-fluid" style="border-radius: 5%;" alt="">
    </div>
    <div class="col-lg-6 content" data-aos="fade-up" style="margin-top: 58px;" data-aos-delay="200">
      <h3>Taman Baca</h3>
      <p style="font-size: 20px;">
              Taman baca adalah sebuah tempat yang
              dirancang khusus untuk membaca dan
              meminjam buku, seringkali berupa ruang
              terbuka atau area yang nyaman dan tenang.
              Biasanya taman baca kami rancang dan
              tempatkan di depan laboratorium BR/BDP.
              Kami mengadakan taman baca setiap
              semester pertama.
      </p>
    </div>
  </div><br><br><br>
</div>

 <!-- 3 -->
 <div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 position-relative d-flex justify-content-center align-self-start" data-aos="fade-up" data-aos-delay="100">
      <img src="{{ asset('dist_front/program_offline/img/duta literasi.jpg') }}" class="img-fluid" style="border-radius: 5%;" alt="">
    </div>
    <div class="col-lg-6 content" data-aos="fade-up" style="margin-top: 80px;"  data-aos-delay="200">
      <h3>Duta Literasi </h3>
      <p style="font-size: 20px;">
Duta literasi adalah individu yang dipilih atau
ditunjuk untuk mempromosikan dan
mengadvokasi pentingnya literasi di dalam
komunitas atau lingkungan tertentu. Kami
memiliki 2 kategori duta literasi, yaitu duta
literasi secara umum dan duta literasi secara
khusus (anggota WJLRC). Biasanya kami
mengadakan duta literasi setiap semester
pertama.
      </p>
    </div>
  </div><br><br><br>
</div>
    </section><!-- /About Alt Section -->
   </main>

   @include('layout.footer')


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @include('layout.scripts')

</body>

</html>
