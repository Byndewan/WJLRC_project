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

  </div>
  <div class="row">
    <div class="col-lg-8 col-md-12 col-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4>Perkembangan Pengunjung Taman Baca</h4>
          <div class="card-header-action">
            <div class="btn-group">
              <a href="#" class="btn btn-primary">Week</a>
              <a href="#" class="btn">Month</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <canvas id="myChart" height="182"></canvas>
          <div class="statistic-details mt-sm-4">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
