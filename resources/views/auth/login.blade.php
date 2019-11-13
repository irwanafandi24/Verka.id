@extends('layouts.navbar')

@section('content')
<div class="container log-pos">
    <div class="row">

        <!-- Login Form Side -->
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-12">
              <p class="font-weight-bold bidan-app">BidanApp</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="font-weight-bold words">Sistem Informasi Pelayanan Kesehatan</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="text-muted">Selamat datang, silahkan masuk dengan akun anda</p>
            </div>
          </div>

          <form method="POST" action="{{ route('postlogin') }}">
              @csrf

              <div class="form-group row justify-content-md-center">
                <div class="col-md-12">
                  <label for="user_email">Alamat Email</label>
                  <input id="user_email" type="email" class="form-control @error('user_email') is-invalid @enderror" name="user_email" value="{{ old('user_email') }}" required autocomplete="user_email" autofocus>
                </div>
              </div>

              <div class="form-group row justify-content-md-center">
                <div class="col-md-12">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-6">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row forgot-pass">
                      <div class="col-md-12">
                        @if (Route::has('password.request'))
                          <a class="" href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                          </a>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>
              @if(!empty($message))
                {{ $message }}
              @endif
              <div class="form-group row mb-0 btn-login">
                <div class="col-md-4">
                  @if (Route::has('register'))
                    <a class="btn btn-secondary" href="{{ route('register') }}">
                        {{ __('Daftar Baru') }}
                    </a>
                  @endif
                </div>
                <div class="col-md-8">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Masuk') }}
                  </button>
                </div>
              </div>
          </form>
      </div>

      <!-- Image Side -->
      <div class="col-sm-7">

      </div>
    </div>
</div>
@endsection
