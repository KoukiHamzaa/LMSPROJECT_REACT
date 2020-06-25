


<!-- Description Field -->
<div class="form-group col-md-9 list-group-item list-group-item-info">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-3 list-group-item disabled">
<div class="mt-5">
    {!! Form::label('category_id', 'Category name:') !!}
    <a href="/categories/{!! $course->category['id'] !!}" target="_blank"><p class="h4 text-capitalize text-success"><i class="fa fa-link"  font-weight-bold" aria-hidden="true">{{ $course->category['name'] }}</i></p></a>
</div>
</div>

<!-- About Instructor Field -->
<div class="form-group col-md-12 list-group-item list-group-item-info">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{{ $course->about_instructor }}</p>
</div>

<!-- Playlist Url Field -->
<div class="form-group col-md-6 list-group-item-warning">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}<br>
    <iframe  src="{{ $course->playlist_url }}" frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="400" height="200"></iframe>
</div>

<!-- Photo Field -->
<div class="form-group col-md-6 list-group-item-warning">
  {!! Form::label('photo', 'Photo:') !!}<br>
    <!--x   <p>{{ $course->photo }}</p> -->
    <!-- <img src="{{ $course->photo }}" class="img-fluid" alt="Responsive image rounded mb-0" width="400" height="200"> -->
    <img src="{{ $course->photo }}" class="card-img-top" alt="Card image cap" width="400" height="200">
</div>

<!-- Tags Field -->
<div class="form-group col-md-8 list-group-item list-group-item-info">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $course->tags }}</p>
</div>

<!-- created time -->
<div class="form-group col-md-4 list-group-item disabled">
<div class="mt-5">
    {!! Form::label('created_at', 'Date de création du cours :') !!}
    <p>{{ $course->created_at->format('h:i a - D d M Y') }}</p>
</div>
</div>

<!-- What Will Student Learn Field -->
<div class="form-group col-md-8 list-group-item list-group-item-info">
    {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
    <p>{{ $course->what_will_student_learn }}</p>
</div>

<!-- created time -->
<div class="form-group col-md-4 list-group-item disabled">
    <div class="mt-5">
        {!! Form::label('updated_at', 'dernière mise à jour du cours :') !!}
        <p>{{ $course->updated_at->format('h:i a - D d M Y') }}</p>
    </div>
</div>

<!-- Target Student Field -->
<div class="form-group col-md-12 list-group-item list-group-item-info">
    {!! Form::label('target_student', 'Target Student:') !!}
    <p>{{ $course->target_student }}</p>
</div>

<!-- Requirements Field -->
<div class="form-group col-md-12 list-group-item list-group-item-info">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{{ $course->requirements }}</p>
</div>

 
{{--<div class="form-group col-md-4 list-group-item disabled">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    <p>{{ $course->subscriber_count }}</p>
</div>--}}