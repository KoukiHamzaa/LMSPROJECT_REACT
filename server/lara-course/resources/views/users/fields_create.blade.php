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

<!-- Issubscribed Field -->
<div class="form-group col-sm-6 mb-5">
    {!! Form::label('isSubscribed', 'Est abonné ?:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isSubscribed', 0) !!}
        {!! Form::checkbox('isSubscribed', '1', null) !!}
    </label>
</div>


<!-- Email Field -->
<div class="form-group col-sm-12" style="max-width:51%">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    {!! Form::password('password' ,['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Choisissez le rôle:') !!}
    <!-- {!! Form::number('role_id', null, ['class' => 'form-control']) !!} -->
    <select	class="browser-default custom-select font-weight-bold" name="role_id" id="role_id">
        @foreach($roles as $role)
            <option class="font-weight-bold" value="{{$role->id}}"> {{$role->name}} </option>
        @endforeach
 </select>
</div>

<!-- Remember image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Annuler</a>
</div>