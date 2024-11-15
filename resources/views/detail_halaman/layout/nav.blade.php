  <header id="header" class="header d-flex align-items-center sticky-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
              <img src="{{ asset('dist_detail/assets/img/LOGO_WJLRC-removebg-preview(1).png') }}" alt="">
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  <li class="dropdown"><a href="{{ route('home') }}"><span>Beranda</span></a></li>
                  <li class="dropdown"><a href="#"><span>Tentang</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="{{ route('pengertian') }}">Pengertian WJLRC</a></li>
                          <li><a href="{{ route('organigram') }}">Organigram</a></li>
                          <li><a href="{{ route('divisi') }}">Divisi</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Program</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="{{ route('program_online') }}">Program Online</a></li>
                          <li><a href="{{ route('program_offline') }}">Program Offline</a></li>
                      </ul>
                  </li>
                  <li><a href="{{ route('karya') }}">Karya</a></li>
                  <li><a href="{{ route('#team-2') }}">Tim</a></li>
                  <li><a href="{{ route('#contact') }}">Kontak</a></li>
                  @guest
                      <li class="dropdown"><a href="{{ route('user_login') }}"><span>Login</span></a></li>
                  @endguest
                  @auth
                      <li class="dropdown"><a href="{{ route('user_logout') }}"><span>Logout</span></a></li>
                  @endauth
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

      </div>
  </header>
