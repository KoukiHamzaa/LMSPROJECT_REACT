<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $coupon->id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Identifiant d'utilisateur:') !!}
    <p>{{ $coupon->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Identifiant du cours:') !!}
    <p>{{ $coupon->course_id }}</p>
</div>

<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Identifiant du étudiant:') !!}
    <p>{{ $coupon->student_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Identifiant de catégorie:') !!}
    <p>{{ $coupon->category_id }}</p>
</div>

<!-- User Account Id Field -->
<div class="form-group">
    {!! Form::label('user_account_id', 'Identifiant du compte utilisateur:') !!}
    <p>{{ $coupon->user_account_id }}</p>
</div>

<!-- Available On Course Page Field -->
<div class="form-group">
    {!! Form::label('available_on_course_page', 'Disponible sur la page du cours:') !!}
    <p>{{ $coupon->available_on_course_page }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $coupon->type }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Prix:') !!}
    <p>{{ $coupon->price }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Statut:') !!}
    <p>{{ $coupon->status }}</p>
</div>

<!-- Deadline Field -->
<div class="form-group">
    {!! Form::label('deadline', 'Date limite:') !!}
    <p>{{ $coupon->deadline }}</p>
</div>

<!-- Count Timer Field -->
<div class="form-group">
    {!! Form::label('count_timer', 'Count Timer:') !!}
    <p>{{ $coupon->count_timer }}</p>
</div>

<!-- Total Available Field -->
<div class="form-group">
    {!! Form::label('total_available', 'Total disponible:') !!}
    <p>{{ $coupon->total_available }}</p>
</div>

<!-- Total Remaining Field -->
<div class="form-group">
    {!! Form::label('total_remaining', 'Total restant:') !!}
    <p>{{ $coupon->total_remaining }}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Supprimé à:') !!}
    <p>{{ $coupon->deleted_at }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé à:') !!}
    <p>{{ $coupon->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Mis à jour à:') !!}
    <p>{{ $coupon->updated_at }}</p>
</div>

