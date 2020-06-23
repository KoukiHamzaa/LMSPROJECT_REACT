<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom d utilisateur:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'Prénom:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Nom de famille:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Genre:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', 'Date de naissance:') !!}
    {!! Form::date('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']) !!}
</div>

<div>
@push('scripts')
    <script type="text/javascript">
        $('#date_of_birth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

@if(Auth::user()->role_id == 1)
<!-- Issubscribed Field -->
<div class="form-group col-sm-6 mb-5">
    {!! Form::label('isSubscribed', 'Est abonné ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isSubscribed', 0) !!}
        {!! Form::checkbox('isSubscribed', '1', null) !!}
    </label>
</div>
@endif


<!-- Email Field -->
<div class="form-group col-sm-12" style="max-width:51%">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

@if(Auth::user()->id == $user->id)
<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
@endif

@if(Auth::user()->role_id == 1)
<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Identifiant de rôle:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div>
@endif

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
<?php $image =  $user->image ?>
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Annuler</a>
</div>
