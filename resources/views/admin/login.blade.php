@extends('layouts.frontend.main')
@section('main-section')
<section class="login-sec">
    <div class="login-form">
        <div class="text-center header-form">
            <h1>Login</h1>
            <p>Login into your SeniorGuru account</p>
        </div>
        <form id="sign_in_adm" method="POST" action="{{ route('admin-login-submit') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" id="exampleInputEmail1"
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
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Keep me logged in</label>
                </li>
                <li class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
                    <a href="javascript:void(0);">Forgot Password?</a>
                </li>
            </ul>

            <button type="submit" class="btn submit-login button-orange w-100">{{ __('Login') }}</button>
        </form>
    </div>
</section>
@endsection
