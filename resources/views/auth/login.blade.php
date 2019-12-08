<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{ asset('assets/front/images/logo.png')  }}" />
    <title>Admin </title>

    <!-- Bootstrap -->
  <link href="{{ asset('assets/admin')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/admin')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets/admin')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/admin')}}/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form name="form" class="form-validation" method="POST" action="{{ route('login') }}">
              <h1>Halaman Login</h1>

                @csrf
                <div class="text-danger wrapper text-center">
                    @if ( count($errors) )
                        <div class="form-group">
                            <label class="form-label">Email atau kata sandi salah</label>
                        </div>
                    @endif
                </div>

                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" />
                </div>

                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"/>
                </div>

                <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                </div>

                <div>
                    <button type="submit" class="btn btn-submit btn-primary ladda-button btn-block"> {{ __('Login') }}</button>
                    {{-- <a class="btn btn-default submit" href="index.html">Log in</a> --}}
                    {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    {{-- <p class="change_link">New to site?
                    <a href="#signup" class="to_register"> Create Account </a>
                    </p> --}}

                <div class="clearfix"></div>
                <br />

                <div>
                    {{-- <img src="{{ asset('assets/front/images/logo.png')  }}" width="30%" alt=""> --}}
                    <h1><img src="{{ asset('assets/front/images/logo.png')  }}" width="30%" alt=""></h1>
                    <p>©2019 Muhammad Iqbal. PT. Perikanan Nusantara (PERSERO). Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>





{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
