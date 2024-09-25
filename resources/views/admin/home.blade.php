@extends('admin.layout.app')

@section('title', 'Admin - Dashboard')

@section('heading', 'Dashboard')

@section('main_content')

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-user-shield"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Admin</h4>
          </div>
          <div class="card-body">
            {{ $total_admin }}
          </div>
        </div>
      </div>
    </div>

    {{-- USERS --}}
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total User</h4>
          </div>
          <div class="card-body">
            {{ $total_user }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="far fa-newspaper"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Mading</h4>
          </div>
          <div class="card-body">
            {{ $total_mading }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-karya">
          <i class="fas fa-file-alt"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total karya</h4>
          </div>
          <div class="card-body">
            {{ $total_karya }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-book-1">
          <i class="fas fa-book"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Buku Yang di Pinjam</h4>
          </div>
          <div class="card-body">
            {{ $total_peminjaman }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-book-2">
          <i class="fas fa-book-open"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Buku</h4>
          </div>
          <div class="card-body">
            {{ $total_buku }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-resensi">
            <i class="fas fa-address-book"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Resensi</h4>
            </div>
            <div class="card-body">
              {{ $total_resensi }}
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-konten">
            <i class="fas fa-file-image"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Konten</h4>
            </div>
            <div class="card-body">
              {{ $total_konten }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-liputan">
            <i class="fas fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Liputan</h4>
            </div>
            <div class="card-body">
              {{ $total_liputan }}
            </div>
          </div>
        </div>
      </div>


  </div>
@endsection
