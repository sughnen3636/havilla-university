<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>HUNI | Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/dash/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dash/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/dash/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/dash/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/dash/css/custom.css')}}">
  <link rel="icon" href="{{ asset('assets/images/Havilla/favicon.png') }}" type="image/x-icon">
</head>

<body style="background-image: url( {{ asset('assets/images/Havilla/login-bg.jpg') }});">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          {{-- <div class="col-md-12 offset-md-3 col-lg-6 offset-lg-3">
              <a class="reveal-inline-block" href="/">
                  <img src="{{ asset('assets/images/Havilla/h_logo.jpeg')}}" alt="" width="300" height="250">
              </a>
          </div> --}}
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4 style="color: #0d2d62!important; font-weight: bold !important; font-size: 25px;">HUNI - Login</h4>
              </div>
              <div class="card-body">
                @include('layouts.flash')
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" tabindex="1" required autofocus value="{{ old('email') }}">
                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      {{-- <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div> --}}
                    </div>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" tabindex="2" required value="{{ old('password') }}">
                    @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="lg-btn" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center" style="color: #0d2d62!important; font-weight: bold !important; font-size: 20px;">
              Havilla University, Nde, Ikom 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <style type="text/css">
    #lg-btn{
      background-color: #d68612; 
      border-color: #d68612;
      font-size: 15px;
      font-weight: bold;
    }

    #lg-btn:hover{
      color: #d68612;
      background-color: white !important;
    }
  </style>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/dash/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ asset('assets/dash/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/dash/js/custom.js')}}"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>