<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Identifiant d'utilisateur:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Identifiant du cours:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- View Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('view_count', 'Nombre de vues:') !!}
    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'URL:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer ', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('items.index') }}" class="btn btn-default">Cancel</a>
</div>
