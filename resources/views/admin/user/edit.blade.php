@extends($adminTheme)

@section('title')
Edit User
@endsection

@section('style')
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Edit User</h1>
    </div>
    <div class="col-md-6 text-end mb-2">
        <a class="btn btn-primary text-white" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" autocomplete="off" class="form-class">
                    @method('PUT')
                    @csrf
                    @include('admin.user.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection