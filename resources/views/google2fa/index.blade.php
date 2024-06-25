@extends('layouts.app')

@section('title')
    Two Factor Authenticator
@endsection

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    
                    <!-- Authenticator basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            @if($errors->any())
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                      <strong>{{$errors->first()}}</strong>
                                    </div>
                                </div>
                            @endif
              
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('2faVerify') }}">
                                    {{ csrf_field() }}
              
                                    <div class="form-group">
                                        <p>Please enter the  <strong>OTP</strong> generated on your Authenticator App. Ensure you submit the current one because it refreshes every 30 seconds.</p>
                                        <label for="one_time_password" class="col-md-12 control-label">One Time Password</label>
              
                                        <div class="col-md-12">
                                            <input id="one_time_password" type="number" class="form-control" name="one_time_password" required autofocus>
                                        </div>
                                    </div>
              
                                    <div class="form-group">
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Authenticator basic -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection