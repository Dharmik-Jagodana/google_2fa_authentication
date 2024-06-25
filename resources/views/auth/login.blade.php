@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    
                    <!-- Login basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            
                            <a href="#" class="brand-logo">
                                <h2 class="brand-text text-primary ms-1">{{ __('custom.Login Title') }}</h2>
                            </a>
                            <p class="card-text mb-2">{{ __('custom.Login Sub Title') }}</p>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-1">
                                    <label for="login-email" class="form-label custom-label">{{ __('Email Address') }}:</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label custom-label" for="login-password">{{ __('Password') }}:</label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                <small>{{ __('Forgot Your Password?') }}</small>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

                                        @error('password')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember-me"> {{ __('Remember Me') }} </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100" tabindex="4">{{ __('Login') }}</button>
                            </form>
                            <p class="text-center mt-2">
                                <span>{{ __('custom.New Platform') }}</span>
                                <a href="{{ route('register') }}">
                                    <span>{{ __('custom.Create Account') }}</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Login basic -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection