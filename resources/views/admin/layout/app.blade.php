<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

    @include('layout.logo')

    @include('admin.layout.styles')

    @include('admin.layout.scripts')

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

    @include('admin.layout.nav')

    @include('admin.layout.sidebar')

      <!-- Main Content -->
      <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>@yield('heading')</h1>
                    <div>
                        @yield('rightside_button')
                    </div>
                </div>

                @yield('main_content')

            </section>
        </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; WJLRC 2024
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  @include('admin.layout.scripts_footer')


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif

@if (session()->get('error'))
    <script>
        iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('error') }}',
    });
    </script>
@endif

@if (session()->get('success'))
    <script>
        iziToast.success({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('success') }}',
    });
    </script>
@endif

</body>
</html>
