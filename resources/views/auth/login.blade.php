@extends('layouts.frontend.main')
@section('main-section')
    @include('layouts.frontend.top-navbar')
    <section class="login-sec">
        <div class="login-form">
            <div class="text-center header-form">
                <h1>Login</h1>
                <p>Login into your SeniorGuru account</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" id="exampleInputEmail1"
                        placeholder="Email">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group pwd-show">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        required id="exampleInputEmail1" placeholder="Password">
                    <i class="fas fa-eye-slash"></i>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <ul class="list-unstyled login-list row">
                    <li class=" col-lg-6 col-md-6 col-sm-6 col-6 form-group pe-0">
                        <input type="checkbox" class="form-check-input" id="keep-login">
                        <label class="form-check-label" for="keep-login">Keep me logged in</label>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
                        <a href="javascript:void(0);">Forgot Password?</a>
                    </li>
                </ul>

                <button type="submit" class="btn submit-login button-orange w-100">{{ __('Log in') }}</button>


                <p class="text-center small-txt-login">Don't have an account? <a href="{{ route('register') }}"
                        class="orange-link">Sign Up</a></p>
            </form>
            <div class="divider-login">
                <p>Or</p>
            </div>
            <div class="d-flex justify-content-around">
                <a class="fb-btn me-1" href="https://www.facebook.com/" target="_blank"><i
                        class="fab fa-facebook-f"></i>Facebook</a>
                <a class="google-btn ms-1" href="https://www.google.com/" target="_blank"><img
                        src="{{asset('assets/frontend/images/google-icon.svg')}}">Google</a>
            </div>
        </div>
    </section>
@endsection
