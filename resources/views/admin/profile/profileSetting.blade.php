<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Name:</label><span class="text-danger">*</span>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name ?? '') }}">
            <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Email:</label><span class="text-danger">*</span>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email ?? '') }}">
            <!-- Error -->
            @if ($errors->has('email'))
            <div class="error">
                {{ $errors->first('email') }}
            </div>
            @endif
        </div>  
    </div>
</div>

<div class="row mt-1">
    <div class="col-md-6">
        <div class="form-group">
            <label>Password:</label>{!! !isset($user) ? '<span class="text-danger">*</span>' : '' !!}
            <input type="password" class="form-control" name="password" id="password">
            <!-- Error -->
            @if ($errors->has('password'))
            <div class="error">
                {{ $errors->first('password') }}
            </div>
            @endif
        </div>  
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Confirm Password:</label>{!! !isset($user) ? '<span class="text-danger">*</span>' : '' !!}
            <input type="Password" class="form-control" name="password_confirmation" id="password_confirmation">
            <!-- Error -->
            @if ($errors->has('password_confirmation'))
            <div class="error">
                {{ $errors->first('password_confirmation') }}
            </div>
            @endif
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mt-2"><i class="fa fa-save"></i> Save</button>