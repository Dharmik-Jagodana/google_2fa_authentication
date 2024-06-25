@extends('layouts.app')

@section('title')
    Reset Password
@endsection

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Reset Password basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            
                            <a href="#" class="brand-logo">
                                <h2 class="brand-text text-primary ms-1">{{ __('custom.Reset Password') }}</h2>
                            </a>

                            <h4 class="card-title mb-1">{{ __('custom.Reset Password') }} 🔒</h4>
                            <p class="card-text mb-2">{{ __('custom.Reset Pwd Sub Title') }}</p>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label custom-label" for="email">{{ __('Email Address') }}:</label>
                                    </div>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label custom-label" for="register-password">{{ __('Password') }}:</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password" type="password" placeholder="********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        
                                        @error('password')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div id="pwd_strength_wrap">
                                            <div id="passwordDescription">Password not entered</div>
                                            <div id="passwordStrength" class="strength0"></div>
                                            <div id="pswd_info">
                                                <strong>Strong Password Tips:</strong>
                                                <ul>
                                                    <li class="invalid" id="length">At least 6 characters</li>
                                                    <li class="invalid" id="pnum">At least one number</li>
                                                    <li class="invalid" id="capital">At least one lowercase &amp; one uppercase letter</li>
                                                    <li class="invalid" id="spchar">At least one special character</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label custom-label" for="reset-password-confirm">{{ __('Confirm Password') }}:</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password-confirm" type="password" placeholder="********" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Reset Password') }}
                                </button>
                            </form>
                            <p class="text-center mt-2">
                                <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> {{ __('custom.Back To Login') }} </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Reset Password basic -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection