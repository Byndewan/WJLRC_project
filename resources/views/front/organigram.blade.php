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
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                <div class="member-img">
                  <img src="{{ asset('uploads/'.$data_organigram_pembina->photo) }}" class="img-fluid" alt="">
                  <div class="social">

                    <a href="{{ $data_organigram_pembina->icon1_url }}"><i class="{{ $data_organigram_pembina->icon1 }}"></i></a>
                    <a href="{{ $data_organigram_pembina->icon2_url }}"><i class="{{ $data_organigram_pembina->icon2 }}"></i></a>
                    <a href="{{ $data_organigram_pembina->icon3_url }}"><i class="{{ $data_organigram_pembina->icon3 }}"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{ $data_organigram_pembina->nama }}</h4>
                  <span>{{ $data_organigram_pembina->jabatan }}</span>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-12">
              <div class="row justify-content-lg-center g-4">
                <div class="col-lg-3 offset-md-3 offset-lg-0 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="team-member">
                    <div class="member-img">
                      <img src="{{ asset('uploads/'.$data_organigram_ketua->photo) }}" class="img-fluid" alt="">
                      <div class="social">
                        <a href="{{ $data_organigram_ketua->icon1_url }}"><i class="{{ $data_organigram_ketua->icon1 }}"></i></a>
                        <a href="{{ $data_organigram_ketua->icon2_url }}"><i class="{{ $data_organigram_ketua->icon2 }}"></i></a>
                        <a href="{{ $data_organigram_ketua->icon3_url }}"><i class="{{ $data_organigram_ketua->icon3 }}"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>{{ $data_organigram_ketua->nama }}</h4>
                      <span>{{ $data_organigram_ketua->jabatan }}</span>
                    </div>
                  </div>
                </div><!-- End Team Member -->

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                  <div class="member-img">
                    <img src="{{ asset('uploads/'.$data_organigram_WK1->photo) }}" class="img-fluid" alt="">
                    <div class="social">

                      <a href="{{ $data_organigram_WK1->icon1_url }}"><i class="{{ $data_organigram_WK1->icon1 }}"></i></a>
                      <a href="{{ $data_organigram_WK1->icon2_url }}"><i class="{{ $data_organigram_WK1->icon2 }}"></i></a>
                      <a href="{{ $data_organigram_WK1->icon3_url }}"><i class="{{ $data_organigram_WK1->icon3 }}"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $data_organigram_WK1->nama }}</h4>
                    <span>{{ $data_organigram_WK1->jabatan }}</span>
                  </div>
                </div>
              </div><!-- End Team Member -->

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member">
                  <div class="member-img">
                    <img src="{{ asset('uploads/'.$data_organigram_WK2->photo) }}" class="img-fluid" alt="">
                    <div class="social">

                      <a href="{{ $data_organigram_WK2->icon1_url }}"><i class="{{ $data_organigram_WK2->icon1 }}"></i></a>
                      <a href="{{ $data_organigram_WK2->icon2_url }}"><i class="{{ $data_organigram_WK2->icon2 }}"></i></a>
                      <a href="{{ $data_organigram_WK2->icon3_url }}"><i class="{{ $data_organigram_WK2->icon3 }}"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $data_organigram_WK2->nama }}</h4>
                    <span>{{ $data_organigram_WK2->jabatan }}</span>
                  </div>
                </div>
              </div>
            </div>
        </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_B1->photo) }}" class="img-fluid" alt="">
                <div class="social">

                <a href="{{ $data_organigram_B1->icon1_url }}"><i class="{{ $data_organigram_B1->icon1 }}"></i></a>
                <a href="{{ $data_organigram_B1->icon2_url }}"><i class="{{ $data_organigram_B1->icon2 }}"></i></a>
                <a href="{{ $data_organigram_B1->icon3_url }}"><i class="{{ $data_organigram_B1->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_B1->nama }}</h4>
                <span>{{ $data_organigram_B1->jabatan }}</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_B2->photo) }}" class="img-fluid" alt="">
                <div class="social">

                    <a href="{{ $data_organigram_B2->icon1_url }}"><i class="{{ $data_organigram_B2->icon1 }}"></i></a>
                    <a href="{{ $data_organigram_B2->icon2_url }}"><i class="{{ $data_organigram_B2->icon2 }}"></i></a>
                    <a href="{{ $data_organigram_B2->icon3_url }}"><i class="{{ $data_organigram_B2->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_B2->nama }}</h4>
                <span>{{ $data_organigram_B2->jabatan }}</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_S1->photo) }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="{{ $data_organigram_S1->icon1_url }}"><i class="{{ $data_organigram_S1->icon1 }}"></i></a>
                    <a href="{{ $data_organigram_S1->icon2_url }}"><i class="{{ $data_organigram_S1->icon2 }}"></i></a>
                    <a href="{{ $data_organigram_S1->icon3_url }}"><i class="{{ $data_organigram_S1->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_S1->nama }}</h4>
                <span>{{ $data_organigram_S1->jabatan }}</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_S2->photo) }}" class="img-fluid" alt="">
                <div class="social">

                  <a href="{{ $data_organigram_S2->icon1_url }}"><i class="{{ $data_organigram_S2->icon1 }}"></i></a>
                  <a href="{{ $data_organigram_S2->icon2_url }}"><i class="{{ $data_organigram_S2->icon2 }}"></i></a>
                  <a href="{{ $data_organigram_S2->icon3_url }}"><i class="{{ $data_organigram_S2->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_S2->nama }}</h4>
                <span>{{ $data_organigram_S2->jabatan }}</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_AL1->photo) }}" class="img-fluid" alt="">
                <div class="social">

                  <a href=""><i class="{{ $data_organigram_AL1->icon1 }}"></i></a>
                  <a href=""><i class="{{ $data_organigram_AL1->icon2 }}"></i></a>
                  <a href=""><i class="{{ $data_organigram_AL1->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_AL1->nama }}</h4>
                <span>{{ $data_organigram_AL1->jabatan }}</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_AL2->photo) }}" class="img-fluid" alt="">
                <div class="social">

                  <a href="{{ $data_organigram_AL2->icon1_url }}"><i class="{{ $data_organigram_AL2->icon1 }}"></i></a>
                  <a href="{{ $data_organigram_AL2->icon2_url }}"><i class="{{ $data_organigram_AL2->icon2 }}"></i></a>
                  <a href="{{ $data_organigram_AL2->icon3_url }}"><i class="{{ $data_organigram_AL2->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_AL2->nama }}</h4>
                <span>{{ $data_organigram_AL2->jabatan }}</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_KM1->photo) }}" class="img-fluid" alt="">
                <div class="social">

                  <a href="{{ $data_organigram_KM1->icon1_url }}"><i class="{{ $data_organigram_KM1->icon1 }}"></i></a>
                  <a href="{{ $data_organigram_KM1->icon2_url }}"><i class="{{ $data_organigram_KM1->icon2 }}"></i></a>
                  <a href="{{ $data_organigram_KM1->icon3_url }}"><i class="{{ $data_organigram_KM1->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_KM1->nama }}</h4>
                <span>{{ $data_organigram_KM1->jabatan }}</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('uploads/'.$data_organigram_KM2->photo) }}" class="img-fluid" alt="">
                <div class="social">

                  <a href="{{ $data_organigram_KM2->icon1_url }}"><i class="{{ $data_organigram_KM2->icon1 }}"></i></a>
                  <a href="{{ $data_organigram_KM2->icon2_url }}"><i class="{{ $data_organigram_KM2->icon2 }}"></i></a>
                  <a href="{{ $data_organigram_KM2->icon3_url }}"><i class="{{ $data_organigram_KM2->icon3 }}"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $data_organigram_KM2->nama }}</h4>
                <span>{{ $data_organigram_KM2->jabatan }}</span>
              </div>
            </div>
          </div><!-- End Team Member -->
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
