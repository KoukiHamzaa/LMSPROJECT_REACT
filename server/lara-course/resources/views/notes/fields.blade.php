<!-- Title Field -->
<div class="form-group col-md-6">
    {!! Form::label('title', 'Titre:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-md-4">
    {!! Form::label('note', 'Note d Evaluation:') !!}
    {!! Form::number('note', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-md-4">
    {!! Form::label('user_id', 'List des utilisateurs:') !!}
    <select	class="text-capitalize browser-default custom-select font-weight-bold" name="user_id" id="user_id">
    @foreach($users as $user)
        <option class="font-weight-bold" value="{{$user->id}}"> {{$user->name}} </option>
    @endforeach
	<select>
</div>

<!-- Course Id Field -->
<div class="form-group col-md-4">
    {!! Form::label('course_id', 'Liste des courses:') !!}
    <select	class="text-capitalize browser-default custom-select font-weight-bold" name="course_id" id="course_id">
    @foreach($courses as $course)
        <option class="font-weight-bold" value="{{$course->id}}"> {{$course->title}} </option>
    @endforeach
	<select>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-4">
    {!! Form::label('category_id', 'List des categories:') !!}
    <select	class="text-capitalize browser-default custom-select font-weight-bold" name="category_id" id="category_id">
        @foreach($categories as $category)
            <option class="font-weight-bold" value="{{$category->id}}"> {{$category->name}} </option>
        @endforeach
    </select>
</div>

<div class="form-group col-md-4">
	  <a class="btn btn-secondary" style="margin-left:20px" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		{!! Form::label('NB', 'Note une remarque?') !!}
	  </a>
      {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('notes.index') }}" class="btn btn-default">Cancel</a>
</div>
<!-- Submit Field -->
<!-- <div class="form-group col-md-4">

</div> -->
<div class="form-group col-sm-12">
    <div class="collapse" id="collapseExample">
	   <div class="" style="width:50%;">
		{!! Form::text('NB', null, ['class' => 'form-control','placeholder'=>'Ajouter un remarque']) !!}
		</div>
	  </div>
</div>

