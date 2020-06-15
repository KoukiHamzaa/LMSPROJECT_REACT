<!-- Name Field -->
<div class="form-group  col-md-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>


<!-- First Name Field -->
<div class="form-group  col-md-4">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $user->first_name }}</p>
</div>

    <!-- View Count Field -->
<div class="col-md-1">
    <span class="time h6"><a class="text-dark" href="{{ route('users.index') }}"> <i class="fa fa-eye "></i>{{ $user->view_count }}</a></span>
</div>

    <!-- Go back Field -->
<div class="col-md-1">
    <span class="time h6"><a class="text-dark" href="{{ route('users.index') }}"> <i class="fa fa-angle-double-left"></i>Go back</a></span>
</div>

<!-- Last Name Field -->
<div class="form-group  col-md-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $user->last_name }}</p>
</div>

<!-- Gender Field -->
<div class="form-group  col-md-6">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $user->gender }}</p>
</div>

@if(Auth::check() && ((Auth::user()->user_id == $user->id) || (Auth::user()->role_id == 1)) ) 
<!-- Date Of Birth Field -->
<div class="form-group  col-md-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    <p>{{ $user->date_of_birth}}</p>

<!-- Role Id Field -->
<div class="form-group  col-md-6">
    {!! Form::label('role_id', 'Role:') !!}
    <p>{{ $user->role['name'] }}</p>
</div>
</div>

@endif

<!-- Email Field -->
<div class="form-group  col-md-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

@if(Auth::check() AND Auth::user()->role_id == 1 ) 
<!-- Issubscribed Field -->
    <div class="form-group  col-md-6">
        {!! Form::label('isSubscribed', 'iS Subscribed:') !!}
        <p>{{ $user->isSubscribed }}</p>
    </div>
    <!-- Deleted At Field -->
    <div class="form-group  col-md-6">
        {!! Form::label('deleted_at', 'Deleted At:') !!}
        <p>{{ $user->deleted_at}}</p>
    </div>

<!-- Created At Field -->
<div class="form-group  col-md-6">
    {!! Form::label('created_at', 'Joined At:') !!}
    <p>{{ $user->created_at->format('h:i a - D d M Y') }}</p>
</div>

@endif
<!-- Updated At Field -->
    <div class="form-group  col-md-6">
        {!! Form::label('updated_at', 'Last Update:') !!}
        <p>{{ $user->updated_at->format('h:i a - D d M Y')}}</p>
</div>
