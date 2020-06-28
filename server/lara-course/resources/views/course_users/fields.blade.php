<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Nom d Utilisateur:') !!}
    <select	class="browser-default custom-select font-weight-bold" name="user_id" id="user_id">
                                      @foreach($users as $user)
                                    <option class="font-weight-bold" value="{{$user->id}}"> {{$user->name}} </option>
                                      @endforeach
                                  </select>
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Nom du cours:') !!}
    <select	class="browser-default custom-select font-weight-bold" name="course_id" id="course_id">
                                      @foreach($courses as $course)
                                    <option class="font-weight-bold" value="{{$course->id}}"> {{$course->title}} </option>
                                      @endforeach
                                  </select>
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Identifiant de catégorie:') !!}
    <select	class="browser-default custom-select font-weight-bold" name="category_id" id="category_id">
                                      @foreach($categories as $category)
                                    <option class="font-weight-bold" value="{{$category->id}}"> {{$category->name}} </option>
                                      @endforeach
                                  </select>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#paid_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


@push('scripts')
    <script type="text/javascript">
        $('#expiry_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Paid Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_amount', 'Montant payé:') !!}
    {!! Form::number('paid_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Statut du compte:') !!}
    <select	class="browser-default custom-select font-weight-bold" name="status" id="status">
                                   <option class="font-weight-bold" value="0">Activé</option>
                                    <option class="font-weight-bold" value="1">Désactivé</option>
                            </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courseUsers.index') }}" class="btn btn-default">Annuler</a>
</div>
