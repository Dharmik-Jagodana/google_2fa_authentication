@extends('layouts.app')

@section('title')
    Reset Password
@endsection

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Forgot Password basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success p-1" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <a href="#" class="brand-logo">
                                    <h2 class="brand-text text-primary ms-1">{{ __('custom.Reset Password') }}</h2>
                                </a>

                                <h4 class="card-title mb-1">{{ __('custom.Reset Password Title') }} 🔒</h4>
                                <p class="card-text mb-2">{{ __('custom.Reset Sub Title') }}</p>

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="mb-1">
                                        <label for="forgot-password-email" class="form-label custom-label">{{ __('Email Address') }}:</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                        @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" tabindex="2">{{ __('Send Password Reset Link') }}</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> {{ __('custom.Back To Login') }} </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Forgot Password basic -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
