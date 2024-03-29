


<!-- Description Field -->
<div class="form-group col-md-9 mt-5">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<div class="form-group  col-md-3 mt-5">
  <img src="{{ $course->photo }}" class="img-fluid" alt="Responsive image">
</div>

<!-- About Instructor Field -->
<div class="form-group col-md-9">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{{ $course->about_instructor }}</p>
</div>

<!-- Playlist Url Field -->
{{--<div class="form-group col-md-6 list-group-item-warning m-0">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}<br>
    <iframe  src="{{ $course->playlist_url }}" frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="400" height="200"></iframe>
</div>--}}

<!-- Category Id Field -->
<div class="form-group col-md-3">
    <div class="mt-5">
        {!! Form::label('category_id', 'Category name:') !!}
        <a href="/categories/{!! $course->category['id'] !!}" target="_blank"><p class="h4 text-capitalize text-success"><i class="fa fa-link"  font-weight-bold" aria-hidden="true">{{ $course->category['name'] }}</i></p></a>
    </div>
</div>

<!-- Tags Field -->
<div class="form-group col-md-6">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $course->tags }}</p>
</div>

<!-- created time -->
<div class="form-group col-md-3">
<div class="mt-5">
    {!! Form::label('created_at', 'Date de création du cours :') !!}
    <p>{{ $course->created_at->format('h:i a - D d M Y') }}</p>
</div>
</div>

<!-- created time -->
<div class="form-group col-md-3">
    <div class="mt-5">
        {!! Form::label('updated_at', 'dernière mise à jour du cours :') !!}
        <p>{{ $course->updated_at->format('h:i a - D d M Y') }}</p>
    </div>
</div>

<!-- What Will Student Learn Field -->
<div class="form-group col-md-8">
    {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
    <p>{{ $course->what_will_student_learn }}</p>
</div>

<!-- Target Student Field -->
<div class="form-group col-md-10">
    {!! Form::label('target_student', 'Target Student:') !!}
    <p>{{ $course->target_student }}</p>
</div>

<!-- Requirements Field -->
<div class="form-group col-md-10 ">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{{ $course->requirements }}</p>
</div>

 
{{--<div class="form-group col-md-4 list-group-item disabled">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    <p>{{ $course->subscriber_count }}</p>
</div>--}}