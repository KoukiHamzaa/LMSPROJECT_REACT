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

<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Identifiant d'étudiant:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control']) !!}
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

<!-- Available On Course Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('available_on_course_page', 'Disponible sur la page du cours:') !!}
    {!! Form::text('available_on_course_page', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Prix:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Statut:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Deadline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deadline', 'Date limite:') !!}
    {!! Form::date('deadline', null, ['class' => 'form-control','id'=>'deadline']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#deadline').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Count Timer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('count_timer', 'Count Timer:') !!}
    {!! Form::number('count_timer', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_available', 'Total disponible:') !!}
    {!! Form::number('total_available', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Remaining Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_remaining', 'Total restant:') !!}
    {!! Form::number('total_remaining', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('coupons.index') }}" class="btn btn-default">Annuler</a>
</div>
