<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Identifiant:') !!}
    <p>{{ $view->id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Identifiant d'utilisateur:') !!}
    <p>{{ $view->user_id }}</p>
</div>

<!-- User Account Id Field -->
<div class="form-group">
    {!! Form::label('user_account_id', 'Identifiant du compte utilisateur:') !!}
    <p>{{ $view->user_account_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Identifiant de catégorie:') !!}
    <p>{{ $view->category_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Identifiant du cours:') !!}
    <p>{{ $view->course_id }}</p>
</div>

<!-- Item Id Field -->
<div class="form-group">
    {!! Form::label('item_id', 'ID de l'article:') !!}
    <p>{{ $view->item_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé à:') !!}
    <p>{{ $view->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Mis à jour à:') !!}
    <p>{{ $view->updated_at }}</p>
</div>

