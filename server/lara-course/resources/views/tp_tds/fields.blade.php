<!-- Course Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('course_id', 'Liste des courses:') !!}
    <select	class="text-capitalize browser-default custom-select font-weight-bold" name="course_id" id="course_id">
    @foreach($courses as $course)
        <option class="font-weight-bold" value="{{$course->id}}"> {{$course->title}} </option>
    @endforeach
	<select>
</div>

<!-- Title Field -->
<div class="form-group col-md-12" style="width:80%">
    {!! Form::label('title', 'Titre:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Titre ...']) !!}
</div>
<br>
<!-- Tp Td Field -->
<div class="form-group col-md-6" style="width:40%">
    {!! Form::label('tp_td', 'TP/TD') !!}
    <select	class="text-capitalize browser-default custom-select font-weight-bold" name="tp_td" id="tp_td">
        <option class="font-weight-bold" value="0"> TP </option>
		<option class="font-weight-bold" value="1"> TD </option>
	<select>
</div>

<!-- File Field -->
<div class="form-group col-md-7">
    {!! Form::label('file', 'Lien de fichier:') !!}
    {!! Form::text('file', null, ['class' => 'form-control', 'placeholder'=>'URL']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-md-6">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tpTds.index') }}" class="btn btn-default">Cancel</a>
</div>
