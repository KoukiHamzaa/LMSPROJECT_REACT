<!-- Title Field -->
<div class="form-group col-xs-12">
    <div class="h1 text-primary text-uppercase"><u>{{ $course->title}}</u></div>
    <div class="h3 text-capitalize text-success font-weight-bold">{{ $course->sub_title }}</div>
</div>

<!-- Sub Title Field
<div class="form-group col-xs-12">
    {!! Form::label('sub_title', 'Sub Title:') !!}

</div> -->

<!-- User namer Field -->
<div class="form-group col-md-6 col-md-6">
    {!! Form::label('user_id', 'Auther:') !!}
    <p>{!! $course->user['name'] !!}</p>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('category_id', 'Category name:') !!}
    <a href="/categories/{!! $course->category['id'] !!}" target="_blank"><p class="h4 text-capitalize text-success"><i class="fa fa-link"  font-weight-bold" aria-hidden="true">{{ $course->category['name'] }}</i></p></a>
</div>

@if(Auth::user()->role_id < 3)
<!-- View Count Field -->
<div class="form-group col-md-6">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $course->view_count }}</p>
</div>
@endif

<!-- Description Field -->
<div class="form-group col-md-8">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- About Instructor Field -->
<div class="form-group col-md-8">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{{ $course->about_instructor }}</p>
</div>

<!-- Playlist Url Field -->
<div class="form-group col-md-6">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}<br>
    <iframe  src="{{ $course->playlist_url }}" frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="400" height="200"></iframe>
</div>

<!-- Photo Field -->
<div class="form-group col-md-6">
  {!! Form::label('photo', 'Photo:') !!}<br>
    <!--x   <p>{{ $course->photo }}</p> -->
    <!-- <img src="{{ $course->photo }}" class="img-fluid" alt="Responsive image rounded mb-0" width="400" height="200"> -->
    <img src="{{ $course->photo }}" class="card-img-top" alt="Card image cap" width="400" height="200">
</div>

<!-- Promo Video Url Field -->
<!-- <div class="form-group col-md-6">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    <p>{{ $course->promo_video_url }}</p>
</div> -->

<!-- Tags Field -->
<div class="form-group col-md-8">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $course->tags }}</p>
</div>
@if(Auth::user()->role_id < 3)
<!-- Creator Status Field -->
<div class="form-group col-md-6">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    <p>{{ $course->creator_status }}</p>
</div>

<!-- Admin Status Field -->
<div class="form-group col-md-6">
    {!! Form::label('admin_status', 'Admin Status:') !!}
    <p>{{ $course->admin_status }}</p>
</div>
@endif
<!-- What Will Student Learn Field -->
<div class="form-group col-md-8">
    {!! Form::label('what_will_student_learn', 'What Will Student Learn:') !!}
    <p>{{ $course->what_will_student_learn }}</p>
</div>

<!-- Target Student Field -->
<div class="form-group col-md-8">
    {!! Form::label('target_student', 'Target Student:') !!}
    <p>{{ $course->target_student }}</p>
</div>

<!-- Requirements Field -->
<div class="form-group col-md-12">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{{ $course->requirements }}</p>
</div>

<!-- Discount Price Field -->
<div class="form-group col-md-4">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    <p>{{ $course->discount_price }}</p>
</div>

<!-- Actual Price Field -->
<div class="form-group col-md-4">
    {!! Form::label('actual_price', 'Actual Price:') !!}
    <p>{{ $course->actual_price }}</p>
</div>


<!-- Subscriber Count Field -->
<div class="form-group col-md-4">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    <p>{{ $course->subscriber_count }}</p>
</div>