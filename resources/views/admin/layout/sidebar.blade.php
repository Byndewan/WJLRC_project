<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="dashboard.html">Admin Panel</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="dashboard.html">AP</a>
      </div>
      <ul class="sidebar-menu">
        <li class="dropdown active">
          <a class="nav-link" href="dashboard.html"><i class="fas fa-hand-point-right"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-point-right"></i> <span>Karya</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="karya-baru.html">Karya Baru</a></li>
            <li><a class="nav-link" href="daftar-karya.html">Daftar Karya</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="organigram.html"><i class="fas fa-hand-point-right"></i> <span>Organigram</span></a></li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Resensi</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="resensi-baru.html">Resensi Baru</a></li>
            <li><a class="nav-link" href="daftar-resensi.html">Daftar Resensi</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Konten</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="konten-baru.html">Konten Baru</a></li>
            <li><a class="nav-link" href="daftar-konten.html">Daftar Konten</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Mading</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="mading-baru.html">Mading Baru</a></li>
            <li><a class="nav-link" href="daftar-mading.html">Daftar Mading</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Laporan Taman Baca</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="daftar-pembaca.html">Daftar Pembaca</a></li>
            <li><a class="nav-link" href="buku-baru.html">Buku Baru</a></li>
            <li><a class="nav-link" href="daftar-buku.html">Daftar Buku</a></li>
            <li><a class="nav-link" href="peminjaman.html">Peminjaman</a></li>
          </ul>
        </li>
<<<<<<< HEAD
        <li><a class="nav-link" href="utilities-contact.html"><i class="fas fa-hand-point-right"></i> <span>Kontak</span></a></li>
=======

        <li class="dropdown {{ Request::is('/admin/daftar/kontak') ? "active" : " " }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-point-right"></i> <span>Kontak</span></a>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('/admin/daftar/kontak') ? "active" : " " }}"><a class="nav-link" href="{{ route('admin_daftar_kontak') }}">Kontak</a></li>
            </ul>
        </li>

        <li class="dropdown {{ Request::is('admin/daftar/tim') ? "active" : " " }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-point-right"></i> <span>Team</span></a>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('admin/daftar/tim') ? "active" : " " }}"><a class="nav-link"
                href="{{ route('admin_daftar_tim') }}">Team</a></li>
            </ul>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('admin/status/tim') ? "active" : " " }}"><a class="nav-link" href="{{ route('admin_status_tim') }}">Status Team</a></li>
            </ul>
        </li>

        <li class="dropdown {{ Request::is('admin/home-banner') ? "active" : " " }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-point-right"></i> <span>Home Banner</span></a>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('admin/home-banner') ? "active" : " " }}"><a class="nav-link" href="{{ route('admin_home_banner') }}">Home Banner</a></li>
            </ul>
        </li>

        <li class="dropdown {{ Request::is('admin/home-footer') ? "active" : " " }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-point-right"></i> <span>Home Footer</span></a>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('admin/home-footer') ? "active" : " " }}"><a class="nav-link" href="{{ route('admin_home_footer') }}">Home Footer</a></li>
            </ul>
        </li>
>>>>>>> 92a017870e9646e091a83cf9105066685839d4a1

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      </div>
    </aside>
  </div>
