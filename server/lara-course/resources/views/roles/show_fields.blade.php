<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'identifiant:') !!}
    <p>{{ $role->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Supprimé à:') !!}
    <p>{{ $role->deleted_at }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé à:') !!}
    <p>{{ $role->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Mis à jour à:') !!}
    <p>{{ $role->updated_at }}</p>
</div>

