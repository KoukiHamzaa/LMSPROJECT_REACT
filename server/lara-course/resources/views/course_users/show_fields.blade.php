<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Identifiant:') !!}
    <p>{{ $courseUser->id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Identifiant d'utilisateur:') !!}
    <p>{{ $courseUser->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Identifiant du cours:') !!}
    <p>{{ $courseUser->course_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Identifiant de catégorie:') !!}
    <p>{{ $courseUser->category_id }}</p>
</div>

<!-- User Account Id Field -->
<div class="form-group">
    {!! Form::label('user_account_id', 'Identifiant du compte utilisateur:') !!}
    <p>{{ $courseUser->user_account_id }}</p>
</div>

<!-- Paid Data Field -->
<div class="form-group">
    {!! Form::label('paid_date', 'La date de paiement:') !!}
    <p>{{ $courseUser->paid_date }}</p>
</div>

<!-- Expiry Date Field -->
<div class="form-group">
    {!! Form::label('expiry_date', 'Date d'expiration:') !!}
    <p>{{ $courseUser->expiry_date }}</p>
</div>

<!-- Plan Field -->
<div class="form-group">
    {!! Form::label('plan', 'Plan:') !!}
    <p>{{ $courseUser->plan }}</p>
</div>

<!-- Paid Amount Field -->
<div class="form-group">
    {!! Form::label('paid_amount', 'Montant payét:') !!}
    <p>{{ $courseUser->paid_amount }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Statut:') !!}
    <p>{{ $courseUser->status }}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Supprimé à:') !!}
    <p>{{ $courseUser->deleted_at }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé à:') !!}
    <p>{{ $courseUser->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Mis à jour à:') !!}
    <p>{{ $courseUser->updated_at }}</p>
</div>

