<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @include('layout.logo')

    @include('detail_halaman.layout.styles')

</head>

<body class="index-page">

    @include('detail_halaman.layout.nav')

    <main class="main">
      <section class="single-post-content">
        <div class="container">
          <div class="row">
            <div class="col-md-9 post-content" data-aos="fade-up">

            @yield('main_content')

    <footer id="footer" class="footer light-background">

      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Sosial media Kami: </span>
            </a>
            <p>kalian bisa kepoin akun sosial media kami dan jangan lupa follow juga ya! </p>
            <div class="social-links d-flex mt-4">
              <a href="https://open.spotify.com/episode/3vBZDOAhxQggfMjIxxbzHM?si=9Hgw7kt_Qz-fcOkybM_8pQ"><i class="bi bi-spotify"></i></a>
              <a href="https://www.instagram.com/wjlrc.smkbbc?igsh=am92bmo3dWJzMGs0"><i class="bi bi-instagram"></i></a>
             </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><a href="#">Tautan Terkait</a></li>
              <li><a href="#">Tautan Yang di rekomendasikan</a></li>
              <li><a href="#">Tautan Sumber Daya</a></li>
              <li><a href="#">Sumber Daya Tambahan</a></li>
              <li><a href="#">Sumber Relavan</a></li>
            </ul>
          </div>



          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak</h4>
            <p>hj.udin gerengseng </p>
            <p>Jl. Babakan Tiga No.82, Ciwidey, Kec. Ciwidey, Kabupaten Bandung, Jawa Barat 40973</p>
            <p>Indonesia</p>
            <p class="mt-4"><strong>No telephone:</strong> <span>+62 881-4580-036</span></p>
            <p><strong>Email:</strong> <span>WJLRC@gmail.com</span></p>
          </div>

        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p> <span>Copyright WJLRC 2024</span> <strong class="px-1 sitename"></strong> <span></span></p>
        <div class="credits">
          <a href="https://bootstrapmade.com/"></a>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('detail_halaman.layout.script')

    @include('detail_halaman.layout.script_footer')

  </body>
  </html>
