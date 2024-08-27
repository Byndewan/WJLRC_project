<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Registration</title>

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
    <div class="main-wrapper">
            <div class="container form-group br" style="margin-top: 6rem">
            <section class="vh-100 modal-body section">
                <div class="container container-login">
                    <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                            class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 mt-5">

                            @if (session()->get('success'))
                                <div class="text-success">{{ session()->get('success') }}</div>
                            @endif
                        <form method="POST" action="{{ route('registration_submit') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="" autofocus></div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" value=""></div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @if (session()->get('error'))
                                    <div class="text-danger">{{ session()->get('error') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('retype_password') is-invalid @enderror" name="retype_password" placeholder="Retype Password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Make Registration
                                </button>
                            </div>
                            <div class="form-group">
                                <div>
                                    <a href="{{ route('user_login') }}" class="text-body">
                                        Already have an account?
                                    </a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal-footer mb-3 mb-md-0 d-flex flex-column flex-md-row text-center justify-content-center py-4 px-4 px-xl-5">
        Copyright © 2024. WJLRC 2024.
        </div>
    </div>
  </div>

  @include('layout.scripts-2')

</body>
</html>
