@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                  <div class="col-md-12">
                    <form method="POST" action="{{ route('postregister') }}">
                        @csrf

                        <div class="form-group row justify-content-md-center">
                          <div class="col-md-12">
                            <label for="email">Alamat E-Mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="user_email">

                          </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                          <div class="col-md-12">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                          <div class="col-md-12">
                            <label for="password-confirm">Ulangi Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                        </div>

                        <div class="form-group row mb-0 btn-login">
                          <div class="col-md-4">
                            <a class="btn btn-secondary" href="{{ url('/') }}">
                                {{ __('Kembali') }}
                            </a>
                          </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
