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

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Identifiant de catégorie:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_account_id', 'Identifiant du compte utilisateur:') !!}
    {!! Form::number('user_account_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Paid Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    {!! Form::date('paid_date', null, ['class' => 'form-control','id'=>'paid_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#paid_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Expiry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiry_date', 'Date d'expiration:') !!}
    {!! Form::date('expiry_date', null, ['class' => 'form-control','id'=>'expiry_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#expiry_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan', 'Plan:') !!}
    {!! Form::text('plan', null, ['class' => 'form-control']) !!}
</div>

<!-- Paid Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_amount', 'Montant payé:') !!}
    {!! Form::number('paid_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Statut:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courseUsers.index') }}" class="btn btn-default">Annuler</a>
</div>
