@extends('layouts.account')

@section('content')
{{-- <div class="container">
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
</div> --}}
<header class="page-header">
    <div class="container">
    <h1>Tài khoản</h1>
    </div>
    </header>
<!-- end page-header -->
<main>

<section class="content-section" data-background="images/section-pattern01.png">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="membership">
            <h6>Đăng nhập</h6>
              
              <form method="POST" action="{{ route('login') }}">
                  <!-- end form-group -->
                  @csrf
              <div class="form-group">
                    <input placeholder="Nhập email của bạn" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <!-- end form-group -->
              <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><i class="lni lni-eye"></i>
                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <!-- end form-group -->
                  <!-- end form-group -->
              <div class="form-group">
                    <input type="submit" value="Đăng nhập">
                  </div>
                  <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                  <!-- end form-group -->
                  
                  <div class="or">
                           <span>or</span>
                       <p>You can pick one of it to sign-in</p>
                       <a href="{{ route('register') }}"> 
                      <small>Đăng kí</small>
                      </a>
                       <a href="#"><i class="lni lni-facebook-filled"></i>
                      <small>with Facebook</small>
                      </a> 
                           </div>
                       <!-- end or -->
              </form>
            </div>
            <!-- end membership -->
          </div>
          <!-- end col-7 -->
          <div class="col-lg-5">
          <figure class="side-image"> 
              <img src="{{asset('public/frontend/images/side-image02.png')}}" alt="Image">
              </figure>
              <!-- end side-image -->
          </div>
          <!-- end col-5 -->
        </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
@endsection
