<a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('dist_front/pengertian/img/logo_wjlrc.png') }}" alt="">
        <!-- <h1 class="sitename">OnePage</h1> -->
</a>

<nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown"><a href="{{ route('home') }}"><span>Beranda</span></a></li>
          <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('pengertian') }}">Pengertian WJLRC</a></li>
              <li><a href="{{ route('organigram') }}">Organigram</a></li>
              <li><a href="{{ route('divisi') }}">Divisi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('program_online') }}">Program Online</a></li>
              <li><a href="{{ route('program_offline') }}">Program Offline</a></li>
            </ul>
          </li>
          <li><a href="{{ route('karya') }}">Karya</a></li>
          <li><a href="{{ route('#team-2') }}">Tim</a></li>
          <li><a href="{{ route('#contact') }}">Kontak</a></li>
          <li class="dropdown"><a href="{{ route('user_logout') }}"><span>Logout</span></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>