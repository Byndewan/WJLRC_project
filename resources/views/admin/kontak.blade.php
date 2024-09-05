<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kontak &dash; WJLRC</title>

  @include('admin.layout.styles')

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

    @include('admin.layout.nav')

    @include('admin.layout.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kontak</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Kontak</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Simpan</button>
                    </div>
        </section>
      </div>

  @include('admin.layout.scripts')

  @include('admin.layout.scripts_footer')

</body>
</html>
