@extends('engine')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{URL::asset('css/register.css')}}">
@section('content')
<div class="header-register">
  <div class="offset-3 offset-md-2">
    <nav class="navbar navbar-light nav-logo">
        <a class="navbar-brand" href="#">
          <img src="{{url('/img/register.png')}}" class="d-inline-block align-top img-icon" alt="">
          Bootstrap
        </a>
    </nav>
  </div>
</div>

<div class="container">
  <div class="row align-items-center mid-section-login">

        <div class="col-10 col-sm-10 col-md-5 col-lg-5  ml-auto mr-auto">
          <div class="row justify-content-md-center">

            <div class="col-sm-10 col-md-10 col-lg-10 register-form-border">
              <h2 class="title">Masuk Sekarang</h2>
              <label>
                Vendor Aman dan Terpercaya! Disini Saja.
              </label>

              <form action="{{ route('login') }}" method="post" class="form-register">

                <div class="separator">
                  <div class="separator-inner-login">
                    <span class="separator-line"></span>
                    <span class="separator-font">Masuk Aplikasi</span>
                    <span class="separator-line"></span>
                  </div>
                </div>

                <div class="input-container-login">
                  <label for="email" class="label-login">Masukkan Email</label>
                  <input id="name" class="input-field-login {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="input-container-login">
                  <label for="password" class="label-login">Password</label>
                  <input id="password" class="input-field-login {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" value="{{ old('password') }}" required autofocus>
                </div>
                <div class="row justify-content-center justify-content-md-center" >
                  <button type="submit" class="btn btn-success btn-actions-login">Login</button>
                </div>

                <div class="separator separator-space">
                  <div class="separator-inner-login">
                    <span class="separator-line"></span>
                    <span class="separator-font">Atau Login Dengan</span>
                    <span class="separator-line"></span>
                  </div>
                </div>

                <ul class="ul-button-login">
                  <li class="icon-i-left">
                    <a href="#" class="btn-logo btn-logo-left-login">
                      <i class="icon-i"><img src="{{url('/img/google.svg')}}" class="icon-img"></i>
                      <span>Google</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn-logo">
                      <i class="icon-i"><img src="{{url('/img/fb.svg')}}" class="icon-img"></i>
                      <span>Facebook</span>
                    </a>
                  </li>
                </ul>

                <div class="row ask-daftar">
                  <span>Belum punya aku Verka? </span><a href="#" class="ask-a">Daftar</a>
                </div>

              </form>
            </div>

      </div>
    </div>
  </div>
</div>

<div class="footer-outer">
  <div class="footer-inner">
    <span>© 2019, Verka.id (Vendor Kita) - Bandung</span>
    <span>
      <a href="#" class="footer-inner-a">Bantuan</a>
    </span>
  </div>
</div>
<!-- <div class="container">
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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
</div> -->
@endsection
