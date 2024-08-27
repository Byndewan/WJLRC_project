<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forget Password &mdash; User</title>

  @include('layout.logo')

  @include('layout.styles-2')

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
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            {{-- <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div> --}}
            <div class="card card-primary">
              <div class="card-header"><h4>Forget Password</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('user_forget_password_submit') }}">
                @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="" autofocus>
                    @error('email')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @if (session()->get('error'))
                      <div class="text-danger">{{ session()->get('error') }}</div>
                    @endif
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Send Password Reset Link
                    </button>
                  </div>
                  <div class="form-group">
                    <div>
                    <a href="{{ route('user_login') }}" class="text-body">
                        Back to Login Page
                    </a>
                    </div>
                </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; WJLRC 2024
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('layout.scripts-2')

</body>
</html>
