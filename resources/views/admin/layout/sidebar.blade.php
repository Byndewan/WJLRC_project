<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin_home') }}">Admin Panel</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin_home') }}">AP</a>
      </div>
      <ul class="sidebar-menu">
        <li class="{{ Request::is('admin/dashboard') ? "active" : "" }}">
          <a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown {{ Request::is('admin/daftar-karya') ? "active" : " " }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-point-right"></i> <span>Karya</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Request::is('admin/daftar-karya') ? "active" : " " }}"><a class="nav-link " href="{{ route('daftar_karya') }}">Daftar Karya</a></li>
          </ul>
        </li>

        <li class="dropdown {{ Request::is('admin/daftar-organigram') ? "active" : " " }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-point-right"></i> <span>Organigram</span></a>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('admin/daftar-organigram') ? "active" : " " }}"><a class="nav-link" href="{{ route('daftar_organigram') }}">Daftar Organigram</a></li>
            </ul>
          </li>

        <li class="dropdown {{ Request::is('admin/daftar-resensi') ? "active" : " " }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Resensi</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Request::is('admin/daftar-resensi') ? "active" : " " }}"><a class="nav-link" href="{{ route('daftar_resensi') }}">Daftar Resensi</a></li>
          </ul>
        </li>
        <li class="dropdown {{ Request::is('admin/daftar-konten') ? "active" : " " }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Konten</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Request::is('admin/daftar-konten') ? "active" : " " }}"><a class="nav-link" href="{{ route('daftar_konten') }}">Daftar Konten</a></li>
          </ul>
        </li>
        <li class="dropdown {{ Request::is('admin/daftar-mading') ? "active" : " " }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Mading</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Request::is('admin/daftar-mading') ? "active" : " " }}"><a class="nav-link" href="{{ route('daftar_mading') }}">Daftar Mading</a></li>
          </ul>
        </li>
        <li class="dropdown {{ Request::is('admin/daftar/buku')||Request::is('admin/daftar/peminjaman') ? "active" : " " }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i> <span>Laporan Taman Baca</span></a>
          <ul class="dropdown-menu">
              <li class="{{ Request::is('admin/daftar/buku') ? "active" : " " }}"><a class="nav-link" href="{{ route('admin_daftar_buku') }}">Daftar Buku</a></li>
            <li class="{{ Request::is('admin/admin/daftar/peminjaman') ? "active" : " " }}"><a class="nav-link" href="{{ route('admin_daftar_peminjaman') }}">Daftar Peminjaman</a></li>
          </ul>
        </li>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      </div>
    </aside>
  </div>