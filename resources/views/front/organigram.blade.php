<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Organigram</title>
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
  <link href="{{ asset('dist_front/organigram/css/main.css') }}" rel="stylesheet">

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
    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>ORGANIGRAM</h2>
        <p>Kenalan yuk sama pembina dan pengurus WJLRC!</p>
      </div><!-- End Section Title -->






































      <div class="container">

        <div class="row justify-content-center g-4">

            @foreach ($data_organigram as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                <div class="member-img">
                  <img src="{{ asset('uploads/'.$item->photo) }}" class="img-fluid" alt="">
                  <div class="social">

                    <a href="{{ $item->icon1_url }}"><i class="{{ $item->icon1 }}"></i></a>
                    <a href="{{ $item->icon2_url }}"><i class="{{ $item->icon2 }}"></i></a>
                    <a href="{{ $item->icon3_url }}"><i class="{{ $item->icon3 }}"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{ $item->nama }}</h4>
                  <span>{{ $item->jabatan }}</span>
                </div>
              </div>
            </div><!-- End Team Member -->
            @endforeach

            {{-- <div class="col-12">
              <div class="row justify-content-lg-center g-4">
                <div class="col-lg-3 offset-md-3 offset-lg-0 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="team-member">
                    <div class="member-img">
                      <img src="{{ asset('uploads/'.$item->photo) }}" class="img-fluid" alt="">
                      <div class="social">
                        <a href="{{ $item->icon1_url }}"><i class="{{ $item->icon1 }}"></i></a>
                        <a href="{{ $item->icon2_url }}"><i class="{{ $item->icon2 }}"></i></a>
                        <a href="{{ $item->icon3_url }}"><i class="{{ $item->icon13}}"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>{{ $item->nama }}</h4>
                      <span>{{ $item->jabatan }}</span>
                    </div>
                  </div>
                </div><!-- End Team Member --> --}}

              {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                  <div class="member-img">
                    <img src="{{ asset('dist_front/organigram/img/pasya fadla.jpg') }}" class="img-fluid" alt="">
                    <div class="social">

                      <a href="wa.me/+6283195523591"><i class="bi bi-whatsapp"></i></a>
                      <a href="https://www.instagram.com/3psy0/"><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-tiktok"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Pasya Fadla Fauzan</h4>
                    <span>Wakil Ketua I</span>
                  </div>
                </div>
              </div><!-- End Team Member -->

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member">
                  <div class="member-img">
                    <img src="{{ asset('dist_front/organigram/img/reva.jpg') }}" class="img-fluid" alt="">
                    <div class="social">

                      <a href=""><i class="bi bi-whatsapp"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-tiktok"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Reva Saluha</h4>
                    <span>Wakil Ketua II</span>
                  </div>
                </div>
              </div>
            </div>
        </div>--}}














          {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/mawar.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href="{{ asset('wa.me/+6289632245596') }}"><i class="bi bi-whatsapp"></i></a>
                  <a href="{{ asset('https://www.instagram.com/rianimawr?igsh=aHI2M29hcGZhNXdv') }}"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mawar Riyani</h4>
                <span>Bendahara I</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/nameera.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nameera Putri Prianti</h4>
                <span>Bendahara II</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/gina.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Gina Nurlaela</h4>
                <span>Sekretaris I</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/asri.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Asri Yunita Agustin</h4>
                <span>Sekretaris II</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/aeni.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nurul Aini Salsabila</h4>
                <span>K. Area Literasi I</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/siti insi.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Siti Insi Sugiarti</h4>
                <span>K. Area Literasi II</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/mujib.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mujib Muhamad Yaasin</h4>
                <span>K. Mading I</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('dist_front/organigram/img/lutfi.jpg') }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhamad Lutfi Zakaria</h4>
                <span>K. Mading II</span>
              </div>
            </div>
          </div><!-- End Team Member --> --}}





























        </div>

      </div>

    </section><!-- /Team Section -->
  </main>

  @include('layout.footer')

  <script>
    function checkMediaQuery() {
        const content = document.getElementsById('organigram-0');
        if (window.innerWidth <= 992) {
            for (let i = 0; i < content.length; i++) {
                content[i].classList.remove('organigram');
            }
        } else {
            for (let i = 0; i < content.length; i++) {
                content[i].classList.add('organigram');
            }
        }
    }

    // Initial check
    checkMediaQuery();

    // Listen for resize events
    window.addEventListener('resize', checkMediaQuery);
</script>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- JS Files -->
  @include('layout.scripts')

</body>

</html>
