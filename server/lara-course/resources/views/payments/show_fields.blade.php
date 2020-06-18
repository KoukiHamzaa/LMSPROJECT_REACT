<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $payment->id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Identifiant d'utilisateur:') !!}
    <p>{{ $payment->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Identifiant du cours:') !!}
    <p>{{ $payment->course_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Identifiant de catégorie:') !!}
    <p>{{ $payment->category_id }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Montant:') !!}
    <p>{{ $payment->amount }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Statut:') !!}
    <p>{{ $payment->status }}</p>
</div>

<!-- Mode Of Payment Field -->
<div class="form-group">
    {!! Form::label('mode_of_payment', 'Moyen de paiement:') !!}
    <p>{{ $payment->mode_of_payment }}</p>
</div>

<!-- Payment Processor Field -->
<div class="form-group">
    {!! Form::label('payment_processor', 'Processeur de paiement:') !!}
    <p>{{ $payment->payment_processor }}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Supprimé à:') !!}
    <p>{{ $payment->deleted_at }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé à:') !!}
    <p>{{ $payment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'A mis à jour a:') !!}
    <p>{{ $payment->updated_at }}</p>
</div>

