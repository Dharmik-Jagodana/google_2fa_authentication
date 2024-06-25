@extends($adminTheme)

@section('title')
    Profile
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Profile</h1>
    </div>
    <div class="col-md-6 text-end mb-2">
        <a href="{{ route('dashboard') }}" type="button" class="btn btn-primary text-white" data-toggle="tooltip" data-placement="bottom" title="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{ route('admin.profile-setting.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('admin.profile.profileSetting')
        </form>
    </div>
</div>
@endsection

@section('script')
@endsection