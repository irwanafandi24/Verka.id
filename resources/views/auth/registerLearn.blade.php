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
  <div class="row align-items-center mid-section">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-md-6 col-lg-6 d-none d-md-block align-self-center logo-img">
          <img src="{{url('/img/register.png')}}" alt="" class="logo-img-size">
        </div>

        <div class="col-10 col-sm-10 col-md-6 col-lg-6  ml-auto mr-auto">
          <div class="row justify-content-md-center">

            <div class="col-sm-10 col-md-10 col-lg-10 register-form-border">
              <h2 class="title">Daftar Sekarang</h2>
              <label>
                <strong>Yuk Mulai,</strong> Cari vendor dengan harga terjangkau
              </label>

              <form action="{{ route('register') }}" method="post" class="form-register">

                <ul class="ul-button">
                  <li class="icon-i-left">
                    <a href="#" class="btn-logo btn-logo-left">
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
                <div class="separator">
                  <div class="separator-inner">
                    <span class="separator-line"></span>
                    <span class="separator-font">Atau Daftar Dengan</span>
                    <span class="separator-line"></span>
                  </div>
                </div>

                <div class="input-container">
                  <i class="fa fa-envelope-o icon"></i>
                  <input id="name" class="input-field {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Email Address" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="input-container">
                  <i class="fa fa-lock icon"></i>
                  <input class="input-field" type="text" placeholder="Password" name="usrnm">
                </div>
                <div class="input-container">
                  <i class="fa fa-lock icon"></i>
                  <input class="input-field" type="text" placeholder="Repeat Password" name="usrnm">
                </div>
                <div class="input-container">
                  <i class="fa fa-phone icon"></i>
                  <input class="input-field" type="text" placeholder="Phone Number" name="usrnm">
                </div>
                <div class="row justify-content-center justify-content-md-center" >
                  <button type="button" class="btn btn-primary btn-actions">Sign Up Now</button>
                  <button type="button" class="btn btn-light btn-actions">Get Login</button>
                </div>
              </form>
            </div>

          </div>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
