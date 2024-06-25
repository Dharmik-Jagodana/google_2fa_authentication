
@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    
                    <!-- Register basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            
                            <a href="#" class="brand-logo">
                                <h2 class="brand-text text-primary ms-1">{{ __('custom.Register Title') }}</h2>
                            </a>
                            <p class="card-text mb-2">{{ __('custom.Register Sub Title') }}</p>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-1">
                                    <label for="register-username" class="form-label custom-label">{{ __('Name') }}:</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    
                                    @error('name')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    <label for="register-email" class="form-label custom-label">{{ __('Email Address') }}:</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    <label for="register-password" class="form-label custom-label">{{ __('Password') }}:</label>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        
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
                                    <label for="confirm-password" class="form-label custom-label">{{ __('Confirm Password') }}:</label>

                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember_me" id="register-privacy-policy" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="register-privacy-policy">
                                            {{ __('custom.Agree') }} <a href="#">{{ __('custom.Privacy Policy') }}</a>
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100" tabindex="5">{{ __('Register') }}</button>
                            
                            </form>

                            <p class="text-center mt-2">
                                <span>{{ __('custom.Have Account') }}</span>
                                <a href="{{ route('login') }}">
                                    <span>{{ __('custom.SignIn') }}</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Register basic -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


