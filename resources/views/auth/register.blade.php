@extends('layouts.frontend.main')
@section('main-section')
    @include('layouts.frontend.top-navbar')
    <section class="login-sec">
        <div class="sign-up">
            <div class="text-center header-form">
                <h1>Sign Up</h1>
                <p>Register for create an account</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" id="exampleInputEmail1"
                                placeholder="Email ">
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group pwd-show">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" id="exampleInputEmail1"
                                placeholder="Password">
                            <i class="fas fa-eye-slash"></i>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group pwd-show">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Confirm Password">
                            <i class="fas fa-eye-slash"></i>
                        </div>
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <label class="form-check-label custm-check-s" for="pay"><input type="checkbox" class="form-check-input"
                        id="pay"> I agree to the <a href="javascript:void(0);" class="orange-link">Terms & Conditions
                    </a> and
                    <a href="javascript:void(0);" class="orange-link">Privacy Policies </a> of SeniorGuru.</label>
                <button type="submit" class="btn submit-sinup button-orange d-block">Sign Up</button>
                <p class="text-center small-txt-login">Already have any account? <a href="{{ url('login') }}"
                        class="orange-link"> Login </a> </p>
            </form>
        </div>
    </section>
@endsection
