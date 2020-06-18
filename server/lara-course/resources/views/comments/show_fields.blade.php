<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Identifiant d'utilisateur:') !!}
    <p>{{ $comment->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Identifiant du cours:') !!}
    <p>{{ $comment->course_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Identifiant de catégorie:') !!}
    <p>{{ $comment->category_id }}</p>
</div>

<!-- Item Id Field -->
<div class="form-group">
    {!! Form::label('item_id', 'ID de l'article:') !!}
    <p>{{ $comment->item_id }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $comment->body }}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Supprimé à:') !!}
    <p>{{ $comment->deleted_at }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé à:') !!}
    <p>{{ $comment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Mis à jour à:') !!}
    <p>{{ $comment->updated_at }}</p>
</div>

