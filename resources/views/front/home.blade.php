<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>West Java Leader's Reading Challenge</title>
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
  <link href="{{ asset('dist_front/landing_page/css/main-2.css') }}" rel="stylesheet">
  <link href="{{ asset('dist_front/landing_page/css/main.css') }}" rel="stylesheet">

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

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('dist_front/landing_page/img/LOGO_WJLRC-removebg-preview.png') }}" alt="">
        <!-- <h1 class="sitename">WJLRC</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda<br></a></li>
          <li><a href="#hero-2">Tentang</a></li>
          <li><a href="#services">Program</a></li>
          <li><a href="#team">Karya</a></li>
          <li><a href="#team-2">Tim</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="{{ route('user_logout') }}">Logout</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    {{--Disini  --}}

    </div>
  </header>

  <main class="main">
    
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{ asset('dist_front/landing_page/img/hero-bg-abstract.jpg') }}" alt="" data-aos="fade-in" class="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
          <div class="col-xl-7 col-lg-9 text-center"> 
            <h1>WELCOME TO WJLRC WEBSITE</h1>
            <p>Tim kami di WJLRC berkomitmen untuk mencapai keunggulan dalam semua kegiatan ekstrakurikuler kami.</p>
          </div>
        </div>
        <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
          <a href="#hero-2" class="btn-get-started">Selanjutnya <i class="bi bi-chevron-right"></i>  </a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <section id="hero-2" class="hero-2 section">

      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Tentang</h2>
          <p>Kenali WJLRC lebih dalam lagi yuk!</p>
        </div><!-- End Section Title -->

        <div class="row gy-4" style="display: flex; justify-content: center;">
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-info-circle"></i></div>
              <h4 class="title"><a href="{{ route('pengertian') }}">Pengertian WJLRC</a></h4>
              <p class="description">Ingin mengetahui lebih dalam tentang asal asul WJLRC?</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-diagram-3"></i></div>
              <h4 class="title"><a href="{{ route('organigram') }}">Organigram</a></h4>
              <p class="description">Kenalan yuk dengan pengurus WJLRC!</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4 class="title"><a href="{{ route('divisi') }}">Divisi</a></h4>
              <p class="description">Pilih divisi favorit kamu disini!</p>
            </div>
          </div><!--End Icon Box -->
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Program</h2>
        <p>WJLRC Punya 2 Program loh!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4" style="display: flex; justify-content: center;">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-wifi"></i>
              </div>
              <a href="{{ route('program_online') }}" class="stretched-link">
                <h3>Program Online</h3>
              </a>
              <p>Ikuti berbagai program kami secara online. Mulai dari editing, mengisi, membuat konten, semua tersedia dengan akses mudah melalui internet.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bi bi-house"></i>
              </div>
              <a href="{{ route('program_offline') }}" class="stretched-link">
                <h3>Program Offline</h3>
              </a>
              <p>Bergabunglah dalam program-program offline kami yang menghadirkan pengalaman belajar langsung dan interaksi tatap muka. Nikmati berbagai kegiatan seperti diskusi kelompok dan acara khusus di SMK Budi Bakti Ciwidey.</p>
            </div>
          </div><!-- End Service Item -->

          </div>

      </div>

    </section><!-- /Services Section -->

    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Karya</h2>
        <p>Lihat karya karya anak BBC yuk!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('dist_front/landing_page/img/images.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Bumi</h4>
                  <span style="color: #444444;">Tere Liye</span>
                  <p style="color: #444444;">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
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
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('dist_front/landing_page/img/images.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Bulan</h4>
                  <span style="color: #444444;">Tere Liye</span>                  
                  <p style="color: #444444;">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
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
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('dist_front/landing_page/img/images.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Matahari</h4>
                  <span style="color: #444444;">Tere Liye</span>
                  <p style="color: #444444;">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
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
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <a href="">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('dist_front/landing_page/img/images.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Komet</h4>
                  <span style="color: #444444;">Tere Liye</span>
                  <p style="color: #444444;">Aut maiores voluptates amet et quis praesentium qui senda para</p>
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
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <a href="">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('dist_front/landing_page/img/images.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Putih</h4>
                  <span style="color: #444444;">Tere Liye</span>
                  <p style="color: #444444;">Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
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
            </a>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <a href="">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('dist_front/landing_page/img/images.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Hitam</h4>
                  <span style="color: #444444;">Tere Liye</span>
                  <p style="color: #444444;">Dolorum tempora officiis odit laborum officiis et et accusamus</p>
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
            </a>
          </div><!-- End Team Member -->

          <a href="{{ route('karya') }}" style="display: flex; justify-content: center; text-decoration: underline; margin-top: 50px;">Lihat yang lainnya &#8594; </a>

        </div>

      </div>

    </section><!-- /Team Section -->


    <!-- Team Section -->
    <section id="team-2" class="team-2 section light-background" style="justify-content: center;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TIM</h2>
        <p> WEBSITE DEVELOPER</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4" style="display: flex; justify-content: center;">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-2-member">
              <div class="member-img-2">
                <img src="{{ asset('dist_front/landing_page/img/abyan ganteng.jpg') }}" class="img-fluid" alt="">
                <div class="social-2">
                  <a href="http://wa.me/+6281289115910"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100054510021298"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/byndewan_?igsh=bDNuaXhvZGI4enlq"><i class="bi bi-instagram"></i></a>
                  <a href="https://https://www.tiktok.com/@yannskuyy12?_t=8oG5R7uZXeL&_r=1"><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info-2">
                <h4>Muhammad Abyan</h4>
                <span>WEB DEVELOPER</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          
        
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-2-member">
              <div class="member-img-2">
                <img src="{{ asset('dist_front/landing_page/img/bu ketu.jpg') }}" class="img-fluid" alt="">
                <div class="social-2">
                  
                  <a href="{{ asset('http://wa.me/+628814580036') }}"><i class="bi bi-whatsapp"></i></a>
                  <a href="{{ asset('https://www.instagram.com/azlia_nisrina/?next=%2F') }}"><i class="bi bi-instagram"></i></a>
                  <a href="{{ asset('https://www.tiktok.com/@mydump_ana?lang=en') }}"><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info-2">
                <h4>Azlia Nisrina Afifah</h4>
                <span>WEB DEVELOPER</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-2-member">
              <div class="member-img-2">
                <img src="{{ asset('dist_front/landing_page/img/pasya.jpg') }}" class="img-fluid" alt="">
                <div class="social-2">
                  <a href="{{ asset('https://x.com/Ahmad_pasya46?t=aJLHGktIpDnkZaxyw5YBqA&s=09') }}"><i class="bi bi-twitter-x"></i></a>
                  <a href="{{ asset('https://www.facebook.com/profile.php?id=100075874456994&mibextid=ZbWKwL') }}"><i class="bi bi-facebook"></i></a>
                  <a href="{{ asset('https://www.instagram.com/pasya4996?igsh=MWNoM2Jwdms0MWJmdg==') }}"><i class="bi bi-instagram"></i></a>
                  <a href="{{ asset('https://wa.me/+628812208502') }}"><i class="bi bi-whatsapp"></i></a>
                 <a href="{{ asset('https://www.tiktok.com/@babyzee_20060422?_t=8oFkQBV06SW&_r=1') }}"><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info-2">
                <h4>Ahmad Pasya</h4>
                <span>WEB DEVELOPER</span>
              </div>
            </div>
          </div><!-- End Team Member -->

         
        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi kami disini</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Babakan Tiga No.82, Ciwidey, Kec.Ciwidey, Kabupaten Bandung, Jawa Barat 40973</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>No Telepon</h3>
                <p>+62 881-4580-036</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>wjlrcsmkbbc@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

      <div class="col-lg-8">
            @if(session()->get('success'))
              <div class="sent-message">{{ session()->get('success') }}</div>
            @endif

            @if(session()->get('error'))
              <div class="error-message">{{ session()->get('error') }}</div>
            @endif

            <form action="{{ route('contact_send_email') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="comment" rows="6" placeholder="Pesan" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Menunggu</div>
                  <div class="text-success">Pesan telah terkirim. Terima kasih!</div>
                  <div class="text-danger"></div>

                  {{-- @if(session()->get('success'))
                    <div class="sent-message">Pesan telah terkirim. Terima kasih!</div>        
                  @endif

                  @if(session()->get('error'))          
                    <div class="error-message"></div>
                  @endif --}}

                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->


        </div>

      </div>

    </section><!-- /Contact Section -->

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