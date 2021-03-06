<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- categories_photos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('categories_photos', 'Ajouter des catégories Photos:') !!}
    {!! Form::text('categories_photos', null, ['class' => 'form-control']) !!}
</div>

<!-- View Count Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('view_count', 'View Count:') !!}
    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}

</div> -->


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-default">Annuler</a>
</div>
